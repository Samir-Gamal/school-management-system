<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $Teachers = Teacher::all();
        return view('pages.teachers.teachers',compact('Teachers'));
    }
    public function create()
    {
        $specializations = specialization::all();;
        $genders =  Gender::all();
        return view('pages.teachers.create',compact('specializations','genders'));
    }

    public function store(StoreTeachers $request)
    {
        try {
            $Teachers = new Teacher();
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->Password);
            $Teachers->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Teachers->specialization_id = $request->Specialization_id;
            $Teachers->gender_id = $request->Gender_id;
            $Teachers->joining_date = $request->Joining_Date;
            $Teachers->address = $request->Address;
            $Teachers->save();
            toastr()->success(__('messages.success'));
            return redirect()->route('teachers.create');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }





    public function edit($id)
    {
        $Teachers = Teacher::findOrFail($id);
        $specializations = $this->Teacher->Getspecialization();
        $genders = $this->Teacher->GetGender();
        return view('pages.teachers.edit',compact('Teachers','specializations','genders'));
    }



    public function update(Request $request)
    {
        try {
            $Teachers = Teacher::findOrFail($request->id);
            $Teachers->email = $request->Email;
            $Teachers->password =  Hash::make($request->Password);
            $Teachers->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Teachers->specialization_id = $request->Specialization_id;
            $Teachers->gender_id = $request->Gender_id;
            $Teachers->joining_date = $request->Joining_Date;
            $Teachers->address = $request->Address;
            $Teachers->save();
            toastr()->success(__('messages.update'));
            return redirect()->route('teachers.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request)
    {
        Teacher::findOrFail($request->id)->delete();
        toastr()->error(__('messages.delete'));
        return redirect()->route('teachers.index');
    }
}
