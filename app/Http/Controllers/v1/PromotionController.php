<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Promotion;
use App\Models\Student;
use App\Repository\StudentPromotionRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{

    public function index()
    {
        $Grades = Grade::all();
        return view('pages.students.promotion.index',compact('Grades'));
    }

    public function create()
    {
        $promotions = promotion::all();
        return view('pages.students.promotion.management',compact('promotions'));
    }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            $students = student::where('grade_id',$request->Grade_id)->where('class_room_id',$request->Classroom_id)->where('section_id',$request->section_id)->where('academic_year',$request->academic_year)->get();

            if($students->count() < 1){
                return redirect()->back()->with('error_promotions', __('لاتوجد بيانات في جدول الطلاب'));
            }

            // update in table student
            foreach ($students as $student){

                $ids = explode(',',$student->id);
                student::whereIn('id', $ids)
                    ->update([
                        'grade_id'=>$request->Grade_id_new,
                        'class_room_id'=>$request->Classroom_id_new,
                        'section_id'=>$request->section_id_new,
                        'academic_year'=>$request->academic_year_new,
                    ]);

                // insert in to promotions
                Promotion::updateOrCreate([
                    'student_id'=>$student->id,
                    'from_grade'=>$request->Grade_id,
                    'from_class_room'=>$request->Classroom_id,
                    'from_section'=>$request->section_id,
                    'to_grade'=>$request->Grade_id_new,
                    'to_class_room'=>$request->Classroom_id_new,
                    'to_section'=>$request->section_id_new,
                    'academic_year'=>$request->academic_year,
                    'academic_year_new'=>$request->academic_year_new,
                ]);

            }
            DB::commit();
            toastr()->success(trans('messages.success'));
            return redirect()->back();

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function destroy($request)
    {
        DB::beginTransaction();

        try {

            // التراجع عن الكل
            if($request->page_id ==1){

                $Promotions = Promotion::all();
                foreach ($Promotions as $Promotion){

                    //التحديث في جدول الطلاب
                    $ids = explode(',',$Promotion->student_id);
                    student::whereIn('id', $ids)
                        ->update([
                            'grade_id'=>$Promotion->from_grade,
                            'class_room_id'=>$Promotion->from_Classroom,
                            'section_id'=> $Promotion->from_section,
                            'academic_year'=>$Promotion->academic_year,
                        ]);

                    //حذف جدول الترقيات
                    Promotion::truncate();

                }
                DB::commit();
                toastr()->error(trans('messages.Delete'));
                return redirect()->back();

            }

            else{

                $Promotion = Promotion::findorfail($request->id);
                student::where('id', $Promotion->student_id)
                    ->update([
                        'grade_id'=>$Promotion->from_grade,
                        'class_room_id'=>$Promotion->from_Classroom,
                        'section_id'=> $Promotion->from_section,
                        'academic_year'=>$Promotion->academic_year,
                    ]);


                Promotion::destroy($request->id);
                DB::commit();
                toastr()->error(trans('messages.Delete'));
                return redirect()->back();

            }

        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
