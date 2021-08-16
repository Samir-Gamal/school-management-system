<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{


    public function index()
    {
        $exams = Exam::get();
        return view('pages.exams.index', compact('exams'));
    }

    public function create()
    {
        return view('pages.exams.create');
    }


    public function store(ExamRequest $request)
    {

        $exams = new Exam();
        $exams->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $exams->term = $request->term;
        $exams->academic_year = $request->academic_year;
        $exams->save();
        toastr()->success(__('messages.success'));
        return redirect()->route('exams.index');

    }

    public function edit($id)
    {
        $exam = Exam::findorFail($id);
        return view('pages.exams.edit', compact('exam'));
    }

    public function update(ExamRequest $request)
    {

        $exam = Exam::findorFail($request->id);
        $exam->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $exam->term = $request->term;
        $exam->academic_year = $request->academic_year;
        $exam->save();
        toastr()->success(__('messages.update'));
        return redirect()->route('exams.index');

    }

    public function destroy(Request $request)
    {
        Exam::destroy($request->id);
        toastr()->error(__('messages.delete'));
        return redirect()->back();
    }
}
