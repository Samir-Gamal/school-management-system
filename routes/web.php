<?php

use App\Http\Controllers\Auth\AuthRouteAPIController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\v1\AttachmentController;
use App\Http\Controllers\v1\AttendanceController;
use App\Http\Controllers\v1\ClassroomController;
use App\Http\Controllers\v1\ExamController;
use App\Http\Controllers\v1\FeeController;
use App\Http\Controllers\v1\GradeController;
use App\Http\Controllers\v1\GraduatedController;
use App\Http\Controllers\v1\GuardianController;
use App\Http\Controllers\v1\HomeController;
use App\Http\Controllers\v1\InvoiceController;
use App\Http\Controllers\v1\PaymentController;
use App\Http\Controllers\v1\ProcessingFeeController;
use App\Http\Controllers\v1\PromotionController;
use App\Http\Controllers\v1\ReceiptController;
use App\Http\Controllers\v1\SectionController;
use App\Http\Controllers\v1\StudentController;
use App\Http\Controllers\v1\SubjectController;
use App\Http\Controllers\v1\TeacherController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Auth::routes();
});


//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath',]
    ], function () {

//==============================Guest pages============================
    Route::group(['middleware' => ['guest']], function () {
        Route::get('login', [AuthRouteAPIController::class, 'login']);
        Route::get('/', [AuthRouteAPIController::class, 'login']);

    });

//==============================Auth pages============================
    Route::group(
        [
            'middleware' => ['auth']
        ], function () {
        //==============================dashboard============================
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

        //==============================dashboard============================

        Route::resource('grades', GradeController::class);


        //==============================Classrooms============================

        Route::resource('classrooms', ClassroomController::class);
        Route::post('delete-all', [ClassroomController::class, 'deleteAll'])->name('delete-all');

        Route::any('filter-classes', [ClassroomController::class, 'Filter_Classes'])->name('filter-classes');


        //==============================Sections============================


        Route::resource('sections', SectionController::class);

        Route::get('/classes/{id}', [SectionController::class, 'getclasses']);


        //==============================guardians============================
        Route::resource('guardians', GuardianController::class);

    //==============================Quizzes============================
    Route::group(['namespace' => 'Quizzes'], function () {
        Route::resource('Quizzes', 'QuizzController');
    });

    //==============================questions============================
    Route::group(['namespace' => 'questions'], function () {
        Route::resource('questions', 'QuestionController');
    });
});


if (App::environment('local')) {

    Route::get('test', [TestController::class, 'test']);
}
