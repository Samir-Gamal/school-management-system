<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\FundAccount;
use App\Models\Payment;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Repository\PaymentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('pages.payments.index', compact('payments'));
    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        return view('pages.payments.add', compact('student'));
    }

    public function edit($id)
    {
        $payment = Payment::findorfail($id);
        return view('pages.payments.edit', compact('payment'));
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            // حفظ البيانات في جدول سندات الصرف
            $payments = new Payment();
            $payments->date = date('Y-m-d');
            $payments->student_id = $request->student_id;
            $payments->amount = $request->Debit;
            $payments->description = $request->description;
            $payments->save();


            // حفظ البيانات في جدول الصندوق
            $fund_accounts = new FundAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->payment_id = $payments->id;
            $fund_accounts->debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();


            // حفظ البيانات في جدول حساب الطلاب
            $students_accounts = new StudentAccount();
            $students_accounts->date = date('Y-m-d');
            $students_accounts->type = 'payments';
            $students_accounts->student_id = $request->student_id;
            $students_accounts->payment_id = $payments->id;
            $students_accounts->debit = $request->Debit;
            $students_accounts->credit = 0.00;
            $students_accounts->description = $request->description;
            $students_accounts->save();

            DB::commit();
            toastr()->success(__('messages.success'));
            return redirect()->route('payments.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        DB::beginTransaction();

        try {

            // تعديل البيانات في جدول سندات الصرف
            $payments = Payment::findorfail($request->id);
            $payments->date = date('Y-m-d');
            $payments->student_id = $request->student_id;
            $payments->amount = $request->Debit;
            $payments->description = $request->description;
            $payments->save();


            // حفظ البيانات في جدول الصندوق
            $fund_accounts = FundAccount::where('payment_id', $request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->payment_id = $payments->id;
            $fund_accounts->debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();


            // حفظ البيانات في جدول حساب الطلاب
            $students_accounts = StudentAccount::where('payment_id', $request->id)->first();
            $students_accounts->date = date('Y-m-d');
            $students_accounts->type = 'payments';
            $students_accounts->student_id = $request->student_id;
            $students_accounts->payment_id = $payments->id;
            $students_accounts->Debit = $request->Debit;
            $students_accounts->credit = 0.00;
            $students_accounts->description = $request->description;
            $students_accounts->save();
            DB::commit();
            toastr()->success(__('messages.update'));
            return redirect()->route('payments.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {

            Payment::destroy($request->id);
            toastr()->error(__('messages.delete'));
            return redirect()->back();
    }
}
