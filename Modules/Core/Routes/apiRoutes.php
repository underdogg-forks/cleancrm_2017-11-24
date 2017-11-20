<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//auth:api
//authorize


// Routes in this group must be authorized.
Route::group([], function() {
    // Site administration section
    Route::group(['prefix' => 'api'], function () {
        Route::get(   'staffdata',                  ['as' => 'api.staff.data',           'uses' => 'StaffController@anyData']);
        Route::get(   'rolesdata',                  ['as' => 'api.roles.data',           'uses' => 'RolesController@anyData']);
        Route::get(   'departmentsdata',            ['as' => 'api.departments.data',     'uses' => 'DepartmentsController@anyData']);
        Route::get(   'teamsdata',                  ['as' => 'api.teams.data',           'uses' => 'TeamsController@anyData']);

    /*
      |=============================================================
      |  Test mail Routes
      |=============================================================
     */
//    Route::get('testmail', function () {
//        $e = 'hello';
//        Config::set('mail.host', 'smtp.gmail.com');
//        \Mail::send('errors.report', ['e' => $e], function ($message) {
//            $message->to('sujitprasad4567@gmail.com', 'sujit prasad')->subject('Error');
//        });
//    });


    }); // End of ADMIN group









});
