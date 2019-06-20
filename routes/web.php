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

Route::get('/', 'Frontend\PageController@index');
Route::get('/coming-soon', 'Frontend\PageController@coming');
Route::get('/about', 'Frontend\PageController@about');
Route::get('/contact', 'Frontend\PageController@contact');
Route::get('/pricing', 'Frontend\PageController@pricing');
Route::get('/support-faq', 'Frontend\PageController@faq');

Route::get('/category-list', 'Frontend\SupplierController@category_list');
Route::get('/categories', 'Frontend\SupplierController@category');
Route::get('/categories/{url}', 'Frontend\SupplierController@category_view');


Route::get('/supplier', 'Frontend\SupplierController@supplier');
Route::get('/product', 'Frontend\SupplierController@product');
Route::get('/profile', 'Frontend\SupplierController@profile');

Route::get('/supplier/join-us', 'Frontend\SupplierController@supplier_join');
Route::get('/suppliers', 'Frontend\SupplierController@category_supplier');
Route::get('/supplier-login', 'Frontend\SupplierController@login');


Route::get('/post-request', 'Frontend\SourceController@index');
Route::get('/source-list', 'Frontend\SourceController@list');

Route::get('/industry', 'Frontend\PageController@blog_list');
Route::get('/industry/detail', 'Frontend\PageController@blog_detail');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/home', 'Backend\Home@index');
    Route::get('/seo', 'Backend\Home@index');

    Route::prefix('category')->group(function() {
        Route::get('/list', 'Backend\CategoryController@list');
        Route::get('/create', 'Backend\CategoryController@create');
        Route::get('/edit/{id}', 'Backend\CategoryController@edit');
        Route::get('/delete/{id}', 'Backend\CategoryController@delete');
        Route::post('/save', 'Backend\CategoryController@save');

    });
});


Auth::routes();
Route::get('/admin/login', 'Backend\Home@login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api/subcategory/{id}','Backend\CategoryController@subcate');
