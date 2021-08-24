<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeeRequest;
use App\Models\Classroom;
use App\Models\Customer;
use App\Models\Fee;
use App\Models\Grade;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {

        $fees = Fee::all();
        $grades = Grade::all();
        return view('pages.fees.index', compact('fees', 'grades'));

    }

    public function create()
    {

        $grades = Grade::all();
        $classrooms = Classroom::all();
        return view('pages.fees.add', compact('grades', 'classrooms'));
    }

    public function edit($id)
    {

        $fee = Fee::findorfail($id);
        $grades = Grade::all();
        $classrooms = Classroom::all();
        return view('pages.fees.edit', compact('fee', 'grades', 'classrooms'));

    }


    public function store(FeeRequest $request)
    {
        $input = $request->only((new Fee())->getFillable());
        $input['title'] = ['en' => $request->title_en, 'ar' => $request->title_ar];
        $fee = Fee::create($input);
        toastr()->success(__('messages.success'));
        return redirect()->route('fees.index');

    }

    public function update(FeeRequest $request)
    {

        $fee = Fee::findorfail($request->id);
        $input = $request->only((new Fee())->getFillable());
        $input['title'] = ['en' => $request->title_en, 'ar' => $request->title_ar];
        $fee->update($input);
        toastr()->success(__('messages.update'));
        return redirect()->route('fees.index');

    }

    public function destroy(Request $request)
    {
        Fee::destroy($request->id);
        toastr()->error(__('messages.delete'));
        return redirect()->back();

    }
}
