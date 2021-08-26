<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
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
        return view('pages.questions.create', compact('quizzes'));
    }

    public function store(QuestionRequest $request)
    {
        $input = $request->only((new Question())->getFillable());
        $question = Question::create($input);
        toastr()->success(trans('messages.success'));
        return redirect()->route('questions.create');

    }

    public function edit($id)
    {
        $question = Question::findorfail($id);
        $quizzes = Quiz::get();
        return view('pages.questions.edit', compact('question', 'quizzes'));
    }

    public function update(QuestionRequest $request)
    {
        $question = Question::findorfail($request->id);
        $input = $request->only((new Question())->getFillable());
        $question->update($input);
        toastr()->success(trans('messages.update'));
        return redirect()->route('questions.index');

    }

    public function destroy(Request $request)
    {
        Question::destroy($request->id);
        toastr()->error(trans('messages.delete'));
        return redirect()->back();
    }
}
