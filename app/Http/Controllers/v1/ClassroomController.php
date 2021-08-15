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

        $My_Classes = Classroom::all();
        $Grades = Grade::all();
        return view('pages.classroom.classroom', compact('My_Classes', 'Grades'));

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

        try {

            $Classrooms = Classroom::findOrFail($request->id);

            $Classrooms->update([

                $Classrooms->name = ['ar' => $request->Name, 'en' => $request->Name_en],
                $Classrooms->grade_id = $request->Grade_id,
            ]);
            toastr()->success(__('messages.update'));
            return redirect()->route('classrooms.index');
        } catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        Log::alert($request);
        Log::alert($request->ids);
        Classroom::destroy($request->ids);
        toastr()->error(__('messages.delete'));
        return redirect()->route('classrooms.index');

    }


    public function delete_all(Request $request)
    {
        $delete_all_id = explode(",", $request->delete_all_id);

        Classroom::whereIn('id', $delete_all_id)->Delete();
        toastr()->error(__('messages.delete'));
        return redirect()->route('classrooms.index');
    }


    public function Filter_Classes(Request $request)
    {
        $Grades = Grade::all();
        $Search = Classroom::select('*')->where('Grade_id', '=', $request->Grade_id)->get();
        return view('pages.classroom.classroom', compact('Grades'))->withDetails($Search);

    }


}

?>
