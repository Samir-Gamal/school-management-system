<?php

use App\Http\Controllers\v1\AttendanceController;
use App\Http\Controllers\Auth\AuthRouteAPIController;
use App\Http\Controllers\v1\ClassroomController;
use App\Http\Controllers\v1\ExamController;
use App\Http\Controllers\v1\FeesController;
use App\Http\Controllers\v1\FeesInvoicesController;
use App\Http\Controllers\v1\GradeController;
use App\Http\Controllers\v1\GraduatedController;
use App\Http\Controllers\v1\HomeController;
use App\Http\Controllers\v1\PaymentController;
use App\Http\Controllers\v1\ProcessingFeeController;
use App\Http\Controllers\v1\PromotionController;
use App\Http\Controllers\v1\ReceiptStudentsController;
use App\Http\Controllers\v1\SectionController;
use App\Http\Controllers\v1\StudentController;
use App\Http\Controllers\v1\SubjectController;
use App\Http\Controllers\v1\TeacherController;
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
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

        //==============================dashboard============================

        Route::resource('Grades', GradeController::class);


        //==============================Classrooms============================

        Route::resource('Classrooms', ClassroomController::class);
        Route::post('delete_all', [ClassroomController::class,'delete_all'])->name('delete_all');

        Route::post('Filter_Classes', [ClassroomController::class,'delete_all'])->name('Filter_Classes');



        //==============================Sections============================


        Route::resource('Sections', SectionController::class);

        Route::get('/classes/{id}',  [SectionController::class,'getclasses']);



        //==============================parents============================
        Route::view('add_parent', 'livewire.show_Form');

        //==============================Teachers============================
        Route::resource('Teachers', TeacherController::class);

        //==============================Students============================
        Route::resource('Students', StudentController::class);
        Route::resource('Graduated', GraduatedController::class);
        Route::resource('Promotion', PromotionController::class);
        Route::resource('Fees_Invoices', FeesInvoicesController::class);
        Route::resource('Fees', FeesController::class);
        Route::resource('receipt_students', ReceiptStudentsController::class);
        Route::resource('ProcessingFee', ProcessingFeeController::class);
        Route::resource('Payment_students', PaymentController::class);
        Route::resource('Attendance', AttendanceController::class);
        Route::get('/Get_classrooms/{id}',   [StudentController::class,'Get_classrooms']);
        Route::get('/Get_Sections/{id}', [StudentController::class,'Get_Sections']);
        Route::post('Upload_attachment', [StudentController::class,'Upload_attachment'])->name('Upload_attachment');
        Route::get('Download_attachment/{studentsname}/{filename}', [StudentController::class,'Download_attachment'])->name('Download_attachment');
        Route::post('Delete_attachment', [StudentController::class,'Delete_attachment'])->name('Delete_attachment');


        //==============================subjects============================
        Route::resource('subjects', SubjectController::class);


        //==============================Exams============================
        Route::resource('Exams', ExamController::class);

    });
});
