<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lorem','LoremController@getIndex');
Route::post('/lorem','LoremController@postIndex');

Route::get('/names','NameController@getIndex');
Route::post('/names','NameController@postIndex');

Route::get('/workspace',function() {
  $faker = Faker\Factory::create();
    echo $faker->name($gender = null|'male'|'female');
    echo $faker->Address;
    echo $faker->phoneNumber;
    echo $faker->userName;
    echo $faker->password;
    echo $faker->freeEmail;



});
