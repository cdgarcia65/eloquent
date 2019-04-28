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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/create', function () {
	$user = User::create([
		'name' => 'Natalia Mutis',
		'email' => 'nathalyamutis@gmail.com',
		'password' => bcrypt('secret'),
		'gender' => 'm',
		'biography' => 'Desarrollador PHP y Laravel'
	]);

	return 'Usuario guardado';
});

Route::get('users/update', function () {
	$user = User::find(1);

	$user->gender = 'm';
	$user->biography = 'Desarrollador PHP y Laravel';
	
	$user->save();

	return 'Usuario actualizado';
});