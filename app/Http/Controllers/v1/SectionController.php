<?php
namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Http\Requests\StoreSections;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $grades = Grade::with(['sections'])->get();
        $list_grades = Grade::all();
        $teachers = Teacher::all();
        return view('pages.sections.index', compact('grades', 'list_grades', 'teachers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SectionRequest $request)
    {

        $Sections = new Section();
        $Sections->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
        $Sections->grade_id = $request->grade_id;
        $Sections->classroom_id = $request->classroom_id;
        $Sections->status = 1;
        $Sections->save();
        $Sections->teachers()->attach($request->teacher_id);
        toastr()->success(__('messages.success'));

        return redirect()->route('sections.index');


    }


    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update(SectionRequest $request)
    {


        $sections = Section::findOrFail($request->id);

        $Sections->name = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
        $Sections->grade_id = $request->Grade_id;
        $Sections->class_id = $request->Class_id;

        if (isset($request->Status)) {
            $Sections->status = 1;
        } else {
            $Sections->status = 2;
        }


        // update pivot tABLE
        if (isset($request->teacher_id)) {
            $Sections->teachers()->sync($request->teacher_id);
        } else {
            $Sections->teachers()->sync(array());
        }


        $Sections->save();
        toastr()->success(__('messages.update'));

        return redirect()->route('sections.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(request $request)
    {

        Section::findOrFail($request->id)->delete();
        toastr()->error(__('messages.delete'));
        return redirect()->route('sections.index');

    }

    public function getclasses($id)
    {
        $list_classes = Classroom::where("grade_id", $id)->pluck("Name_Class", "id");

        return $list_classes;
    }

}

?>
