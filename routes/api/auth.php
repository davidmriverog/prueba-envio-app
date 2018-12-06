<?php 

Route::group(['prefix' => 'authorization','middleware'=>'api'], function () {

    Route::post('send-authorization', [
        'as' => 'authorization.send-authorization',
        'uses' => 'AuthController@sendAuthorization'
    ]);
});