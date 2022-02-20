<?php

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:teacher']
    ], function () {

    //==============================dashboard============================
    Route::get('/teacher/dashboard', function () {

        $ids = Teacher::findorFail(auth()->user()->id)->Sections()->pluck('section_id');
        $data['count_sections']= $ids->count();
        $data['count_students']= \App\Models\Student::whereIn('section_id',$ids)->count();

//        $ids = DB::table('teacher_section')->where('teacher_id',auth()->user()->id)->pluck('section_id');
//        $count_sections =  $ids->count();
//        $count_students = DB::table('students')->whereIn('section_id',$ids)->count();
        return view('pages.Teachers.dashboard.dashboard',$data);
    });

});
