<?php

use App\Models\Student;
use Illuminate\Http\Request;
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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:parent']
    ], function () {

    //==============================dashboard============================
    Route::get('/parent/dashboard', function () {
        $sons = Student::where('parent_id',auth()->user()->id)->get();
        return view('pages.parents.dashboard',compact('sons'));
    })->name('dashboard.parents');

    Route::group(['namespace' => 'Parents\dashboard'], function () {
        Route::get('children', 'ChildrenController@index')->name('sons.index');
        Route::get('results/{id}', 'ChildrenController@results')->name('sons.results');
        Route::get('attendances', 'ChildrenController@attendances')->name('sons.attendances');
        Route::post('attendances','ChildrenController@attendanceSearch')->name('sons.attendance.search');
        Route::get('fees', 'ChildrenController@fees')->name('sons.fees');
        Route::get('receipt/{id}', 'ChildrenController@receiptStudent')->name('sons.receipt');
        Route::get('profile/parent', 'ChildrenController@profile')->name('profile.show.parent');
        Route::post('profile/parent/{id}', 'ChildrenController@update')->name('profile.update.parent');
    });

});
