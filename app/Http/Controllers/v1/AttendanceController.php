<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{




    public function index()
    {
        $grades = Grade::with(['sections','sections.classroom'])->get();
        $teachers = Teacher::all();
        return view('pages.attendance.sections',compact('grades','teachers'));
    }



    public function store(Request $request)
    {
        try {

            foreach ($request->attendences as $studentid => $attendence) {

                if( $attendence == 'presence' ) {
                    $status = true;
                } else if( $attendence == 'absent' ){
                    $status = false;
                }

                Attendance::create([
                    'student_id'=> $studentid,
                    'grade_id'=> $request->grade_id,
                    'classroom_id'=> $request->classroom_id,
                    'section_id'=> $request->section_id,
                    'teacher_id'=> 1,
                    'day'=> date('Y-m-d'),
                    'status'=> $status
                ]);

            }

            toastr()->success(__('messages.success'));
            return redirect()->back();

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }    }


    public function show($id)
    {
        $students = Student::with('attendance')->where('section_id',$id)->get();
        return view('pages.attendance.index',compact('students'));
    }

}
