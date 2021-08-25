<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Quizze;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class QuizController extends Controller
{


    public function index()
    {
        $quizzes = Quizze::get();
        return view('pages.quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::all();
        $data['teachers'] = Teacher::all();
        return view('pages.quizzes.create', $data);
    }


    public function store(Request $request)
    {


        $quizzes = new Quizze();
        $quizzes->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $quizzes->subject_id = $request->subject_id;
        $quizzes->grade_id = $request->Grade_id;
        $quizzes->classroom_id = $request->Classroom_id;
        $quizzes->section_id = $request->section_id;
        $quizzes->teacher_id = $request->teacher_id;
        $quizzes->save();
        toastr()->success(trans('messages.success'));
        return redirect()->route('quizzes.create');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $quizz = Quizze::findorFail($id);
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::all();
        $data['teachers'] = Teacher::all();
        return view('pages.quizzes.edit', $data, compact('quizz'));
    }

    public function update(Request $request)
    {

        $quizz = Quizze::findorFail($request->id);
        $quizz->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
        $quizz->subject_id = $request->subject_id;
        $quizz->grade_id = $request->Grade_id;
        $quizz->classroom_id = $request->Classroom_id;
        $quizz->section_id = $request->section_id;
        $quizz->teacher_id = $request->teacher_id;
        $quizz->save();
        toastr()->success(trans('messages.Update'));
        return redirect()->route('quizzes.index');

    }

    public function destroy(Request $request)
    {

        Quizze::destroy($request->id);
        toastr()->error(trans('messages.Delete'));
        return redirect()->back();

    }
}
