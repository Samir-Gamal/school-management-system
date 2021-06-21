<?php


namespace App\Repository;


use App\FundAccount;
use App\Models\ReceiptStudent;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ReceiptStudentsRepository implements ReceiptStudentsRepositoryInterface
{

    public function index()
    {
        $receipt_students = ReceiptStudent::all();
        return view('pages.Receipt.index',compact('receipt_students'));

    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        return view('pages.Receipt.add',compact('student'));
    }

    public function edit($id)
    {
        $receipt_student = ReceiptStudent::findorfail($id);
        return view('pages.Receipt.edit',compact('receipt_student'));
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            // حفظ البيانات في جدول سندات القبض
            $receipt_students = new ReceiptStudent();
            $receipt_students->date = date('Y-m-d');
            $receipt_students->student_id = $request->student_id;
            $receipt_students->Debit = $request->Debit;
            $receipt_students->description = $request->description;
            $receipt_students->save();

            // حفظ البيانات في جدول الصندوق
            $fund_accounts = new FundAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->receipt_id = $receipt_students->id;
            $fund_accounts->Debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            // حفظ البيانات في جدول حساب الطالب
            $fund_accounts = new StudentAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->type = 'receipt';
            $fund_accounts->receipt_id = $receipt_students->id;
            $fund_accounts->student_id = $request->student_id;
            $fund_accounts->Debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            DB::commit();
            toastr()->success(trans('messages.success'));
            return redirect()->route('receipt_students.index');

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
            $receipt_students = ReceiptStudent::findorfail($request->id);
            $receipt_students->date = date('Y-m-d');
            $receipt_students->student_id = $request->student_id;
            $receipt_students->Debit = $request->Debit;
            $receipt_students->description = $request->description;
            $receipt_students->save();

            // تعديل البيانات في جدول الصندوق
            $fund_accounts = FundAccount::where('receipt_id',$request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->receipt_id = $receipt_students->id;
            $fund_accounts->Debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            // تعديل البيانات في جدول الصندوق

            $fund_accounts = StudentAccount::where('receipt_id',$request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->type = 'receipt';
            $fund_accounts->student_id = $request->student_id;
            $fund_accounts->receipt_id = $receipt_students->id;
            $fund_accounts->Debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();


            DB::commit();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('receipt_students.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            ReceiptStudent::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
