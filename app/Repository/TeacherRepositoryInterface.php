<?php

namespace App\Repository;

interface TeacherRepositoryInterface{

    // get all Teachers
    public function getAllTeachers();

    // Get specialization
    public function Getspecialization();

    // Get Gender
    public function GetGender();

    // StoreTeachers
    public function StoreTeachers($request);

    // StoreTeachers
    public function editTeachers($id);

    // UpdateTeachers
    public function UpdateTeachers($request);

    // DeleteTeachers
    public function DeleteTeachers($request);

}


