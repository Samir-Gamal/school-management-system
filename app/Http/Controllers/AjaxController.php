<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Section;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    // Get Classrooms
    public function getClassrooms($id)
    {
        return Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");

    }

    //Get Sections
    public function Get_Sections($id){

        return Section::where("Class_id", $id)->pluck("Name_Section", "id");

    }
}
