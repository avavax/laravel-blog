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
    return view('main');
})->name('main');

Route::get('/about', 'PageController@about')
    ->name('page.about');

// Просмотр списка статей

Route::get('/articles', 'ArticleController@index')
  ->name('articles.index');

// Создание статьи C

Route::get('/articles/create', 'ArticleController@create')
  ->name('articles.create');

Route::post('/articles', 'ArticleController@store')
  ->name('articles.store');

// Обновление статьи U

Route::get('/articles/{id}/edit', 'ArticleController@edit')
  ->name('articles.edit');

Route::patch('/articles/{id}', 'ArticleController@update')
  ->name('articles.update');

// Просмотр статьи R

Route::get('/articles/{id}', 'ArticleController@show')
  ->name('articles.show');

// Удаление статьи D

Route::delete('/articles/{id}', 'ArticleController@destroy')
  ->name('articles.destroy');