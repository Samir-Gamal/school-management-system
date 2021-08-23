<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\StudentRequest;
use App\Models\BloodType;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Guardian;
use App\Models\Image;
use App\Models\Nationality;
use App\Models\Section;
use App\Models\Student;
use App\Repository\StudentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('pages.students.index', compact('students'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $data['grades'] = Grade::all();
        $data['guardians'] = Guardian::all();
        $data['genders'] = Gender::all();
        $data['nationalities'] = Nationality::all();
        $data['blood_types'] = BloodType::all();
        return view('pages.students.edit', $data, compact('student'));
    }

    public function update(StudentRequest $request)
    {
        $student = Student::findorfail($request->id);
        $input = $request->only((new Student())->getFillable());
        $input['name'] = ['ar' => $request->name_ar, 'en' => $request->name_en];
        if ($request->has('password')) {
            $input['password'] = Hash::make($request->password);
        }

        if ($request->has('attachments')) {
            foreach (request()->file('attachments') as $file) {
                $attachments_input[]['filename'] = $file->store('attachments/students/' . $student->id);
            }
            $student->images()->createMany($attachments_input);
        }


        $student->update($input);
        toastr()->success(__('messages.success'));
        return redirect()->route('students.show', $request->id);


    }


    public function create()
    {

        $data['grades'] = Grade::all();
        $data['guardians'] = Guardian::all();
        $data['genders'] = Gender::all();
        $data['nationalities'] = Nationality::all();
        $data['blood_types'] = BloodType::all();
        $data['classrooms'] = Classroom::all();
        $data['sections'] = Section::all();

        return view('pages.students.add', $data);

    }

    public function show($id)
    {
        $student = Student::findorfail($id);
        return view('pages.students.show', compact('student'));
    }


    public function Get_classrooms($id)
    {

        $list_classes = Classroom::where("grade_id", $id)->pluck("name", "id");
        return $list_classes;

    }

    //Get Sections
    public function Get_Sections($id)
    {

        $list_sections = Section::where("class_id", $id)->pluck("name", "id");
        return $list_sections;
    }

    public function store(StudentRequest $request)
    {
        $input = $request->only((new Student())->getFillable());
        $input['name'] = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $input['password'] = Hash::make($request->password);
        $student = Student::create($input);

        // insert img
        if ($request->hasfile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('attachments/students/' . $student->name, $file->getClientOriginalName(), 'upload_attachments');

                // insert in image_table
                $images = new Image();
                $images->filename = $name;
                $images->imageable_id = $student->id;
                $images->imageable_type = 'App\Models\Student';
                $images->save();
            }
        }

        toastr()->success(__('messages.success'));
        return redirect()->route('students.create');


    }

    public function destroy(Request $request)
    {

        Student::destroy($request->id);
        toastr()->error(__('messages.delete'));
        return redirect()->route('students.index');
    }

    public function uploadAttachment(Request $request)
    {

        toastr()->success(__('messages.success'));
        return redirect()->route('students.show', $request->student_id);
    }

    public function Download_attachment(Request $request ,$student,$attachment)
    {

        return response()->date->storeUrl($filename);
    }

    public function Delete_attachment($request)
    {
        // Delete img in server disk
        Storage::disk('upload_attachments')->delete('attachments/students/' . $request->student_name . '/' . $request->filename);

        // Delete in data
        image::where('id', $request->id)->where('filename', $request->filename)->delete();
        toastr()->error(__('messages.delete'));
        return redirect()->route('students.show', $request->student_id);
    }

}
