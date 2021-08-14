<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeesRequest;
use App\Models\Fee;
use App\Models\Grade;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index(){

        $fees = Fee::all();
        $Grades = Grade::all();
        return view('pages.fees.index',compact('fees','Grades'));

    }

    public function create(){

        $Grades = Grade::all();
        return view('pages.fees.add',compact('Grades'));
    }

    public function edit($id){

        $fee = Fee::findorfail($id);
        $Grades = Grade::all();
        return view('pages.fees.edit',compact('fee','Grades'));

    }


    public function store(StoreFeesRequest $request)
    {
        try {

            $fees = new Fee();
            $fees->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $fees->amount  =$request->amount;
            $fees->grade_id  =$request->Grade_id;
            $fees->class_room_id  =$request->Classroom_id;
            $fees->description  =$request->description;
            $fees->year  =$request->year;
            $fees->fee_type  =$request->Fee_type;
            $fees->save();
            toastr()->success(__('messages.success'));
            return redirect()->route('fees.create');

        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(StoreFeesRequest $request)
    {
        try {
            $fees = Fee::findorfail($request->id);
            $fees->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $fees->amount  =$request->amount;
            $fees->grade_id  =$request->Grade_id;
            $fees->class_room_id  =$request->Classroom_id;
            $fees->description  =$request->description;
            $fees->year  =$request->year;
            $fees->fee_type  =$request->Fee_type;
            $fees->save();
            toastr()->success(__('messages.update'));
            return redirect()->route('fees.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            Fee::destroy($request->id);
            toastr()->error(__('messages.delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
