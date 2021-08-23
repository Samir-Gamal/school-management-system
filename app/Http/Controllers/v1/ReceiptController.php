<?php

namespace App\Http\Controllers\v1;


use App\Http\Controllers\Controller;
use App\Models\FundAccount;
use App\Models\Receipt;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Repository\ReceiptStudentsRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('pages.receipts.index',compact('receipts'));

    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        return view('pages.receipts.add',compact('student'));
    }

    public function edit($id)
    {
        $receipt = Receipt::findorfail($id);
        return view('pages.receipts.edit',compact('receipt'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            // حفظ البيانات في جدول سندات القبض
            $receipt = new Receipt();
            $receipt->date = date('Y-m-d');
            $receipt->student_id = $request->student_id;
            $receipt->debit = $request->Debit;
            $receipt->description = $request->description;
            $receipt->save();

            // حفظ البيانات في جدول الصندوق
            $fund_accounts = new FundAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->receipt_id = $receipt->id;
            $fund_accounts->debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            // حفظ البيانات في جدول حساب الطالب
            $fund_accounts = new StudentAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->type = 'receipts';
            $fund_accounts->receipt_id = $receipt->id;
            $fund_accounts->student_id = $request->student_id;
            $fund_accounts->debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            DB::commit();
            toastr()->success(__('messages.success'));
            return redirect()->route('receipts.index');

        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        DB::beginTransaction();

        try {
            // تعديل البيانات في جدول سندات القبض
            $receipt = Receipt::findorfail($request->id);
            $receipt->date = date('Y-m-d');
            $receipt->student_id = $request->student_id;
            $receipt->debit = $request->Debit;
            $receipt->description = $request->description;
            $receipt->save();

            // تعديل البيانات في جدول الصندوق
            $fund_accounts = FundAccount::where('receipt_id',$request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->receipt_id = $receipt->id;
            $fund_accounts->debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            // تعديل البيانات في جدول الصندوق

            $fund_accounts = StudentAccount::where('receipt_id',$request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->type = 'receipts';
            $fund_accounts->student_id = $request->student_id;
            $fund_accounts->receipt_id = $receipt->id;
            $fund_accounts->debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();


            DB::commit();
            toastr()->success(__('messages.update'));
            return redirect()->route('receipts.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Receipt::destroy($request->id);
            toastr()->error(__('messages.delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
