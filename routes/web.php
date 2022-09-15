<?php

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



/*
Routes linked to various controllers.
Participation routes made to access specific functions individually after issues making 
it a resourceful controller.
Admin and user routes placed within auth middleware for security.
*/
Route::group(['middleware' => ['web']], function() {
    //
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    //Admin
    Route::resource('/admin/questionnaires', 'AdminQuestionnaireController');
    Route::resource('/admin/users', 'AdminUsersController');
    //Users
    Route::resource('/users/questionnaires', 'QuestionnaireController');
    Route::resource('/users/questionnaires/{questionnaire}/questions', 'QuestionController');
});

Route::get('/participation/index', 'ParticipationController@index');
Route::get('/participation/{questionnaire}','ParticipationController@show');
Route::post('/participation/{questionnaire}','ParticipationController@store');
