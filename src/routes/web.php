<?php 
use Illuminate\Support\Facades\Route;


// Route::get('/test',function(){
//     echo "<h1>Hi This is Mohammad Ruhul Amin</h1>";
// });

// Route::get('/test-view',function(){
//     return view('userInformation::test');
// });

Route::group(['namespace'=>'TeamBravo\userInformation\Http\Controllers'],function(){
    Route::get('/user_registrarion_index','UserController@index');
    Route::post('/user_registrarion_save','UserController@saveUserInfo')->name('userInformation.save');
});