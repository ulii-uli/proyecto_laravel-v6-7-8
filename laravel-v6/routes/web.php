<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* USUARIOS */
/* index lista */

/* Usuarios*/
/* get obtenemos los  datos en BD del usuario con la funcion index*/
Route::get('/users','UserController@index');
/* store guarda datos en BD */
Route::post('/users', 'UserController@store')->name('user.store');
/* Delete elima datos */
Route::delete('/users/{user}' ,'UserController@delete')->name('user.destroy');

/* Categorias */

Route::get('/categories','CategoryController@index');
Route::post('/categories','CategoryController@store')->name('category.store');
Route::put('/categories/{id}/update','CategoryController@update')->name('category.update');;
Route::get('/categories/{id}/edit','CategoryController@edit');
Route::delete('/categories/{category}','CategoryController@delete')->name('category.destroy');
/* Articulos */

Route::get('/articles','ControllerArticle@index');
Route::get('/article/add','ControllerArticle@create');
Route::post('/articles','ControllerArticle@store')->name('article.store');
//Route::get('/articles/{$id}','ControllerArticle@show');

/*  Images */

Route::post('/images', 'ImagesController@store')->name('images.store');
/* Auth Routes */
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

/*  Email MailTrap */
Route::get('enviar', ['as' => 'enviar', function () {

    $data = ['link' => 'http://styde.net&#39'];
    
    \Mail::send('emails.notificacion', $data, function ($message) {
    
    $message->from('ulixexulixe@gmail.com', 'ulixexulixex7w7@gmail.com');
    
    $message->to('al222010294@gmail.com')->subject('ulises');
    
    });
    
    return "Se env??o el email";
    }]);
    

/* para verificar cuenta */
Auth::routes(['verify' => true]);

Auth::routes();

