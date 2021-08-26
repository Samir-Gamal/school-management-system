<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Repository\QuestionRepositoryInterface;
use Illuminate\Http\Request;

class QuestionController extends Controller
{


    public function index()
    {
        $questions = Question::get();
        return view('pages.questions.index', compact('questions'));
    }

    public function create()
    {
        $quizzes = Quiz::get();
        return view('pages.questions.create',compact('quizzes'));
    }

    public function store(Request $request)
    {

            $question = new Question();
            $question->title = $request->title;
            $question->answers = $request->answers;
            $question->right_answer = $request->right_answer;
            $question->score = $request->score;
            $question->quizze_id = $request->quizze_id;
            $question->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('questions.create');

    }

    public function edit($id)
    {
        $question = Question::findorfail($id);
        $quizzes = Quiz::get();
        return view('pages.questions.edit',compact('question','quizzes'));
    }

    public function update(Request $request)
    {
            $question = Question::findorfail($request->id);
            $question->title = $request->title;
            $question->answers = $request->answers;
            $question->right_answer = $request->right_answer;
            $question->score = $request->score;
            $question->quizze_id = $request->quizze_id;
            $question->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('questions.index');

    }

    public function destroy(Request $request)
    {
            Question::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
    }
}
