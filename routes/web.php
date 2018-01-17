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
*/Auth::routes();



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

  Route::group(['prefix' => 'home'], function (){

    Route::get('/', 'HomeController@index')->name('home');

  });

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

    	Route::get('/', 'ArticleController@index')->name('articles.index');
    	Route::get('create', 'ArticleController@create')->name('articles.create');
    	Route::post('store', 'ArticleController@store')->name('articles.store');
      	Route::get('edit/{id}', 'ArticleController@edit')->name('articles.edit');
  		Route::post('update/{id}', 'ArticleController@update')->name('articles.update');
  		Route::get('destroy/{id}', 'ArticleController@destroy')->name('articles.destroy');

  	});

  	Route::group(['prefix' => 'user'], function (){

    	Route::get('/', 'UserController@index')->name('user.index');
    	Route::get('create', 'UserController@create')->name('user.create');
    	Route::post('store', 'UserController@store')->name('user.store');
     	Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
  		Route::post('update/{id}', 'UserController@update')->name('user.update');
  		Route::get('destroy/{id}', 'UserController@destroy')->name('user.destroy');

  	});


});
