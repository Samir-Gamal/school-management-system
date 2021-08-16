<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Http\Requests\StoreGrades;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $grades = Grade::all();
        return view('pages.grades.index', compact('grades'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreGrades $request)
    {
        $grade = new Grade();

        $grade->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $grade->notes = $request->notes;
        $grade->save();
        toastr()->success(__('messages.success'));
        return redirect()->route('grades.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update(StoreGrades $request)
    {
        $grade = Grade::findOrFail($request->id)->update([
            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
            'notes' => $request->notes,
        ]);

        toastr()->success(__('messages.update'));
        return redirect()->route('grades.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        $grade = Grade::withCount('classrooms')->findOrFail($request->id);
        if ($grade->classrooms_count == 0) {
            $grade->delete();
            toastr()->error(__('messages.delete'));
            return redirect()->route('grades.index');
        } else {
            toastr()->error(__('grade.delete_grade_error'));
            return redirect()->route('grades.index');

        }


    }

}
