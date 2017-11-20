<?php


Route::group(['prefix' => 'staffpanel'], function () {
    Route::get(   '',      ['as' => 'staffpanel',          'uses' => 'StaffController@index']);

}); // End of ADMIN group
