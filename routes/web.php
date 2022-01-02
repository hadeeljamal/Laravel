<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|    return Redirect::to(route('login'));

*/

Auth::routes();



Route::get('/', function () {
    // return view('welcome');
    {
     return Redirect::to(route('login'));

    }

});

Route::middleware(['auth'])->group(function () {
    Route::get('onetomany',function(){

        $traning = App\traning::find(2);
        echo $traning->student->studentEnglish;
        // return $traning->student->studentEnglish;
        // $comment = App\Comment::find(1);
    });
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/alhams', function () {
        return view('layouts.layoutalhams');
    });
    Route::get('/add', function () {
        return view('students\addstudent');
    });
    Route::get('/all', function () {
        return view('students.allstudent');
    });
    Route::get('/traning', function () {
        return view('students.traning');
    });
    Route::get('/payment', function () {
        return view('students.payment');
    });

    // Route::resource('students', 'StudentController');
    Route::get('adddata', 'StudentController@index')->name('adddata');
    Route::post('adddata', 'StudentController@index')->name('adddata');
    Route::post('storedata', 'StudentController@store')->name('storedata');
    Route::get('edit/{id}', 'StudentController@edit')->name('edit');
    Route::post('updatedata/{id}', 'StudentController@update')->name('updatedata');
    Route::get('delete/{id}', 'StudentController@destroy')->name('delete');

    Route::get('traningname/{id}', 'traningController@relation')->name('traningname');
    Route::get('addtraning', 'traningController@index')->name('addtraning');
    Route::post('storetraning/{id}', 'traningController@store')->name('storetraning');
    Route::post('storepayment', 'paymenteController@store')->name('storepayment');

});


// Route::get('/login', function () {
//     return view('students.users');
// });

use App\Student;
use App\traning;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pdfview',array('as'=>'pdfview','uses'=>'StudentController@pdfview'))->name('report.export-pdf');


Route::get('users/export/', 'StudentController@export');
