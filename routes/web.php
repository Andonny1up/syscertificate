<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Voyager\CourseController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    
    //<- certificados
    Route::controller(CourseController::class)->group(function(){
        Route::get('course/{id_course}/certificate/','formCertificate')->name('form_certificate');
        Route::put('course/{id_course}/add-certificate/','addCertificate')->name('add_certificate');
        Route::get('course/{id_course}/certificate/{id_person}','showCertificate')->name('show_certificate');
    });
    
    // certificados->
});
