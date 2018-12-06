<?php 

Route::group(['prefix' => 'person','middleware'=>'auth:api'], function () {

    Route::get('list-person-pag', [
        'as' => 'person.list-person-pag',
        'uses' => 'PersonController@listPersonPaginate'
    ]);

    Route::get('list-person-location', [
        'as' => 'person.list-person-location',
        'uses' => 'PersonController@listPersonAndLocation'
    ]);
    
});