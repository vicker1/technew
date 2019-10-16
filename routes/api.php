<?php

Route::apiResource('/question','Questioncontroller');  

Route::apiResource('/category','Categorycontroller');  

Route::apiResource('/question/{question}/reply','Replycontroller'); 

Route::post('/like/{reply}','Likecontroller@likeit');
Route::delete('/like/{reply}','Likecontroller@unlikeit');


//Route::group([

    //'middleware' => 'api',
    //'prefix' => 'auth'  

//], function ($router) {

    //Route::post('login', 'AuthController@login');
    //Route::post('signup', 'AuthController@signup');
    //Route::post('logout', 'AuthController@logout');
    //Route::post('refresh', 'AuthController@refresh');
    //Route::post('me', 'AuthController@me');

//});