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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::group(['prefix' => 'categories'], function (){

		Route::get('/', 'CategoryController@index')->name('categories.index');
		Route::get('create', 'CategoryController@create')->name('categories.create');
		Route::post('store', 'CategoryController@store')->name('categories.store');
		Route::get('edit/{id}', 'CategoryController@edit')->name('categories.edit');
		Route::post('update/{id}', 'CategoryController@update')->name('categories.update');
		Route::get('destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');

	});

	Route::group(['prefix' => 'subcategories'], function (){

		Route::get('/', 'SubCategoryController@index')->name('subcategories.index');
		Route::get('create', 'SubCategoryController@create')->name('subcategories.create');
		Route::post('store', 'SubCategoryController@store')->name('subcategories.store');
		Route::get('edit/{id}', 'SubCategoryController@edit')->name('subcategories.edit');
		Route::post('update/{id}', 'SubCategoryController@update')->name('subcategories.update');
		Route::get('destroy/{id}', 'SubCategoryController@destroy')->name('subcategories.destroy');

	});

	Route::group(['prefix' => 'articles'], function (){

    	Route::get('/', 'ArticleController@index')->name('article.index');
    	Route::get('create', 'ArticleController@create')->name('article.create');
    	Route::post('store', 'ArticleController@store')->name('article.store');
      Route::get('edit/{id}', 'ArticleController@edit')->name('article.edit');
  		Route::post('update/{id}', 'ArticleController@update')->name('article.update');
  		Route::get('destroy/{id}', 'ArticleController@destroy')->name('article.destroy');

  });


});
