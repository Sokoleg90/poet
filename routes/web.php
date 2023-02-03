<?php

use Illuminate\Support\Facades\Route;

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

//Admin
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
    Route::group(['namespace' => 'Ua', 'prefix' => 'ua'], function () {
    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/', 'IndexController')->name('admin.ua.post.index');
        Route::get('/create', 'CreateController')->name('admin.ua.post.create');
        Route::post('/', 'StoreController')->name('admin.ua.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.ua.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.ua.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.ua.post.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.ua.post.destroy');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', 'IndexController')->name('admin.ua.category.index');
        Route::get('/create', 'CreateController')->name('admin.ua.category.create');
        Route::post('/', 'StoreController')->name('admin.ua.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.ua.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.ua.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.ua.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.ua.category.destroy');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::get('/', 'IndexController')->name('admin.ua.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('admin.ua.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('admin.ua.comment.update');
        Route::delete('/{comment}', 'DestroyController')->name('admin.ua.comment.destroy');
    });
    });
    //Admin RU-lang
    Route::group(['namespace' => 'Ru', 'prefix' => 'ru'], function () {
        Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
            Route::get('/', 'IndexController')->name('admin.ru.post.index');
            Route::get('/create', 'CreateController')->name('admin.ru.post.create');
            Route::post('/', 'StoreController')->name('admin.ru.post.store');
            Route::get('/{post}', 'ShowController')->name('admin.ru.post.show');
            Route::get('/{post}/edit', 'EditController')->name('admin.ru.post.edit');
            Route::patch('/{post}', 'UpdateController')->name('admin.ru.post.update');
            Route::delete('/{post}', 'DestroyController')->name('admin.ru.post.destroy');
        });
        Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
            Route::get('/', 'IndexController')->name('admin.ru.category.index');
            Route::get('/create', 'CreateController')->name('admin.ru.category.create');
            Route::post('/', 'StoreController')->name('admin.ru.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.ru.category.show');
            Route::get('/{category}/edit', 'EditController')->name('admin.ru.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.ru.category.update');
            Route::delete('/{category}', 'DestroyController')->name('admin.ru.category.destroy');
        });
        Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
            Route::get('/', 'IndexController')->name('admin.ru.comment.index');
            Route::get('/{comment}/edit', 'EditController')->name('admin.ru.comment.edit');
            Route::patch('/{comment}', 'UpdateController')->name('admin.ru.comment.update');
            Route::delete('/{comment}', 'DestroyController')->name('admin.ru.comment.destroy');
        });
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
