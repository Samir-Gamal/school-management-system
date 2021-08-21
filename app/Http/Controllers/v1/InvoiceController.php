<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;
use App\Models\Fee;
use App\Models\Grade;
use App\Models\Invoice;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Repository\FeeInvoicesRepositoryInterface;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{

    public function index()
    {
        $invoices = Invoice::all();
        $grades = Grade::all();
        return view('pages.invoices.index',compact('invoices','grades'));
    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        $fees = Fee::where('classroom_id',$student->classroom_id)->get();
        return view('pages.invoices.add',compact('student','fees'));
    }
    public function create()
    {
        $fees = Fee::all();
        $students= Student::all();
        return view('pages.invoices.add',compact('fees','students'));
    }
    public function edit($id)
    {
        $invoice = Invoice::findorfail($id);
        $fees = Fee::where('classroom_id',$invoice->classroom_id)->get();
        return view('pages.invoices.edit',compact('invoice','fees'));
    }

    public function store(InvoiceRequest $request)
    {
        $fees = $request->List_Fees;

        DB::beginTransaction();

            foreach ($fees as $fee) {
                // حفظ البيانات في جدول فواتير الرسوم الدراسية
                $create_fee = new Invoice();
                $create_fee->invoice_at = date('Y-m-d');
                $create_fee->student_id = $fee['student_id'];
                $create_fee->grade_id = $request->grade_id;
                $create_fee->classroom_id = $request->classroom_id;;
                $create_fee->fee_id = $fee['fee_id'];
                $create_fee->amount = $fee['amount'];
                $create_fee->description = $fee['description'];
                $create_fee->save();

                // حفظ البيانات في جدول حسابات الطلاب
                $StudentAccount = new StudentAccount();
                $StudentAccount->date = date('Y-m-d');
                $StudentAccount->type = 'invoice';
                $StudentAccount->invoice_id = $create_fee->id;
                $StudentAccount->student_id = $fee['student_id'];
                $StudentAccount->debit = $fee['amount'];
                $StudentAccount->credit = 0.00;
                $StudentAccount->description = $fee['description'];
                $StudentAccount->save();
            }

            DB::commit();

            toastr()->success(__('messages.success'));
            return redirect()->route('invoices.index');

    }

    public function update($request)
    {
        DB::beginTransaction();
        try {
            // تعديل البيانات في جدول فواتير الرسوم الدراسية
            $Fees = Invoice::findorfail($request->id);
            $Fees->fee_id = $request->fee_id;
            $Fees->amount = $request->amount;
            $Fees->description = $request->description;
            $Fees->save();

            // تعديل البيانات في جدول حسابات الطلاب
            $StudentAccount = StudentAccount::where('invoice_id',$request->id)->first();
            $StudentAccount->debit = $request->amount;
            $StudentAccount->description = $request->description;
            $StudentAccount->save();
            DB::commit();

            toastr()->success(__('messages.update'));
            return redirect()->route('invoices.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {

            Invoice::destroy($request->id);
            toastr()->error(__('messages.delete'));
            return redirect()->back();

    }

}
