<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuizRequest;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Quiz;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class QuizController extends Controller
{


    public function index()
    {
        $quizzes = Quiz::get();
        return view('pages.quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::all();
        $data['teachers'] = Teacher::all();
        $data['classrooms'] = Classroom::all();
        $data['sections'] = Section::all();
        return view('pages.quizzes.create', $data);
    }


    public function store(QuizRequest $request)
    {
        $input = $request->only((new Quiz())->getFillable());
        $input['name'] = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $quiz = Quiz::create($input);
        toastr()->success(trans('messages.success'));
        return redirect()->route('quizzes.create');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $quiz = Quiz::findorFail($id);
        $data['grades'] = Grade::all();
        $data['subjects'] = Subject::all();
        $data['teachers'] = Teacher::all();
        return view('pages.quizzes.edit', $data, compact('quiz'));
    }

    public function update(QuizRequest $request)
    {
        $quiz = Quiz::findorFail($request->id);
        $input = $request->only((new Quiz())->getFillable());
        $input['name'] = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $quiz->update($input);

        toastr()->success(trans('messages.update'));
        return redirect()->route('quizzes.index');
    }

    public function destroy(Request $request)
    {

        Quiz::destroy($request->id);
        toastr()->error(trans('messages.delete'));
        return redirect()->back();

    }
}
