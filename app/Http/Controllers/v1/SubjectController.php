<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::get();
        return view('pages.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $grades = Grade::get();
        $teachers = Teacher::get();
        $classrooms = Classroom::get();
        return view('pages.subjects.create', compact('grades', 'teachers', 'classrooms'));
    }


    public function store(Request $request)
    {
        $subjects = new Subject();
        $subjects->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $subjects->grade_id = $request->grade_id;
        $subjects->classroom_id = $request->classroom_id;
        $subjects->teacher_id = $request->teacher_id;
        $subjects->save();
        toastr()->success(__('messages.success'));
        return redirect()->route('subjects.create');
    }


    public function edit($id)
    {

        $subject = Subject::findorfail($id);
        $grades = Grade::get();
        $teachers = Teacher::get();
        return view('pages.subjects.edit', compact('subject', 'grades', 'teachers'));

    }

    public function update($request)
    {
        try {
            $subjects = Subject::findorfail($request->id);
            $subjects->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $subjects->grade_id = $request->Grade_id;
            $subjects->classroom_id = $request->Class_id;
            $subjects->teacher_id = $request->teacher_id;
            $subjects->save();
            toastr()->success(__('messages.update'));
            return redirect()->route('subjects.create');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Subject::destroy($request->id);
            toastr()->error(__('messages.delete'));
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
