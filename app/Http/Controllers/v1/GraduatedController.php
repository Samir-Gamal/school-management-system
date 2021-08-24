<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Student;
use App\Repository\StudentGraduatedRepositoryInterface;
use Illuminate\Http\Request;

class GraduatedController extends Controller
{
    public function index()
    {
        $students = Student::Graduated()->get();
        return view('pages.students.graduated.index', compact('students'));
    }

    public function create()
    {
        $grades = Grade::all();
        $classrooms = Classroom::all();
        $sections = Section::all();
        return view('pages.students.graduated.create', compact('grades', 'classrooms', 'sections'));
    }

    public function softDelete($request)
    {
        $students = student::where('grade_id', $request->grade_id)->where('classroom_id', $request->classroom_id)->where('section_id', $request->section_id)->get();

        if ($students->count() < 1) {
            return redirect()->back()->with('error_Graduated', __('لاتوجد بيانات في جدول الطلاب'));
        }

        foreach ($students as $student) {
            $ids = explode(',', $student->id);
            Student::whereIn('id', $ids)->Delete();
        }

        toastr()->success(__('messages.success'));
        return redirect()->route('graduates.index');
    }

    public function restore($id)
    {
        Student::Graduated()->where('id', $id)->first()->restore();
        toastr()->success(__('messages.success'));
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        Student::Graduated()->where('id', $request->id)->first()->forceDelete();
        toastr()->error(__('messages.delete'));
        return redirect()->back();
    }

}
