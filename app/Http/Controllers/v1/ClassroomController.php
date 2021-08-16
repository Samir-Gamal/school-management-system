<?php


namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroom;
use App\Models\Classroom;
use App\Models\Customer;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClassroomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $classrooms = Classroom::all();
        $grades = Grade::all();
        return view('pages.classroom.index', compact('classrooms', 'grades'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreClassroom $request)
    {
        foreach ($request->classrooms as $classroom) {
            $input[] = [
                'name' => json_encode(['en' => $classroom['name_en'], 'ar' => $classroom['name_ar']]),
                'grade_id' => $classroom['grade_id']
            ];
        }

        $classroom = Classroom::insert($input);

        toastr()->success(__('messages.success'));
        return redirect()->route('classrooms.index');

    }


    /*


    */


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update(Request $request)
    {
        $classroom = Classroom::findOrFail($request->id);

        $classroom->update([
            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
            'grade_id' => $request->grade_id,
        ]);
        toastr()->success(__('messages.update'));
        return redirect()->route('classrooms.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        Classroom::destroy($request->id);
        toastr()->error(__('messages.delete'));
        return redirect()->route('classrooms.index');

    }


    public function deleteAll(Request $request)
    {
        $delete_all_id = explode(",", $request->delete_all_id);

        Classroom::whereIn('id', $delete_all_id)->Delete();
        toastr()->error(__('messages.delete'));
        return redirect()->route('classrooms.index');
    }


    public function Filter_Classes(Request $request)
    {
        $grades = Grade::all();
        $Search = Classroom::select('*')->where('grade_id', '=', $request->grade_id)->get();
        return view('pages.classroom.index', compact('grades'))->withDetails($Search);

    }


}

?>
