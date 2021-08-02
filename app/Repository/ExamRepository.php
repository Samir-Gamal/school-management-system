<?php

namespace App\Repository;

use App\Models\Exam;
use Exception;

class ExamRepository implements ExamRepositoryInterface
{

    public function index()
    {
        $exams = Exam::get();
        return view('pages.Exams.index', compact('exams'));
    }

    public function create()
    {
        return view('pages.Exams.create');
    }

    public function store($request)
    {
        try {
            $exams = new Exam();
            $exams->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $exams->term = $request->term;
            $exams->academic_year = $request->academic_year;
            $exams->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Exams.create');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $exam = Exam::findorFail($id);
        return view('pages.Exams.edit', compact('exam'));
    }

    public function update($request)
    {
        try {
            $exam = Exam::findorFail($request->id);
            $exam->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $exam->term = $request->term;
            $exam->academic_year = $request->academic_year;
            $exam->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Exams.index');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Exam::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
