<?php 

Route::group(['prefix' => 'test','middleware'=>'api'], function () {

    Route::get('test-success', [
        'as' => 'test.test-success',
        'uses' => 'TestController@testSuccessData'
    ]);
});