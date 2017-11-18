<?php


Route::get('/', function () {
    return view('phonebook');
});

Route::get('/phonebook/{name}',function(){
	return redirect('/');
})->where('name','[A-Za-z]+');

Route::resource('phonebook','PhonebookController');
Route::post('getData','PhonebookController@getData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
