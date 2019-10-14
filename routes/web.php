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
Route::get('/product/{url}', 'Frontend\SupplierController@product');
Route::post('/product/inquiry/{uuid}','Frontend\SupplierController@product_inquiry');
Route::get('/profile', 'Frontend\SupplierController@profile');

Route::get('/supplier/join-us', 'Frontend\SupplierController@supplier_join');
Route::get('/suppliers', 'Frontend\SupplierController@category_supplier');
Route::get('/supplier-login', 'Frontend\SupplierController@login');
Route::post('/supplier/register', 'Frontend\SupplierController@register');


Route::get('/post-request', 'Frontend\SourceController@index');
Route::post('/post-request', 'Frontend\SourceController@post');
Route::get('/source-list', 'Frontend\SourceController@list');
Route::get('/source-request/detail/{id}', 'Frontend\SourceController@detail');

Route::get('/industry', 'Frontend\PageController@blog_list');
Route::get('/industry/{uri}', 'Frontend\PageController@blog_list_spec');
Route::get('/industry/{category}/article/{uri}', 'Frontend\PageController@blog_detail');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/home', 'Backend\Home@index');
    Route::get('/seo', 'Backend\Home@index');

    Route::prefix('suppliers')->group(function(){
        Route::get('/', 'Backend\SupplierController@list');
        Route::get('/edit/{id}', 'Backend\SupplierController@edit');
        Route::get('/toggle/{id}', 'Backend\SupplierController@toggleStatus');
        Route::post('/save', 'Backend\SupplierController@save');
        Route::post('/profile', 'Backend\SupplierController@profile_update');
        Route::get('/product/view/{id}', 'Backend\SupplierController@product_view');
        Route::post('/product/update', 'Backend\SupplierController@product_update');
        Route::get('/delete/{id}', 'Backend\SupplierController@delete');

    });

    Route::prefix('source')->group(function(){
        Route::get('/', 'Backend\SourceController@list');
        Route::get('/toggle/{id}', 'Backend\SourceController@toggleStatus');
        Route::get('/delete/{id}', 'Backend\SourceController@delete');

    });


    Route::prefix('category')->group(function() {
        Route::get('/list', 'Backend\CategoryController@list');
        Route::get('/create', 'Backend\CategoryController@create');
        Route::get('/edit/{id}', 'Backend\CategoryController@edit');
        Route::get('/delete/{id}', 'Backend\CategoryController@delete');
        Route::post('/save', 'Backend\CategoryController@save');

    });
    Route::prefix('blog')->group(function() {
        Route::get('/list', 'Backend\BlogController@list');
        Route::get('/create', 'Backend\BlogController@create');
        Route::get('/edit/{id}', 'Backend\BlogController@edit');
        Route::get('/delete/{id}', 'Backend\BlogController@delete');
        Route::post('/save', 'Backend\BlogController@save');
    });

});

//用于管理Buyer的路由
Route::get('/user/register', 'Frontend\UserController@register_form');
Route::post('/user/register', 'Frontend\UserController@register');
Route::get('/user/login', 'Frontend\UserController@login');
Route::post('/user/login', 'Frontend\UserController@login_check');
Route::get('/user/logout', 'Frontend\UserController@logout');
Route::prefix('user')->middleware('checkuser')->group(function() {
    Route::get('/dashboard', 'Frontend\UserController@index');
});


//用于管理Supplier的路由
Route::get('/supplier/login', 'Backend\Supplier\AccountController@login')->name('supplier-login');
Route::post('/supplier/login', 'Backend\Supplier\AccountController@login_check');
Route::prefix('supplier')->middleware('checksupplier')->group(function() {
    Route::get('/home', 'Backend\Supplier\AccountController@index');
    Route::get('/profile', 'Backend\Supplier\AccountController@profile');
    Route::post('/profile', 'Backend\Supplier\AccountController@profile_update');

    Route::get('/product/list', 'Backend\Supplier\ProductController@list');
    Route::get('/product/view/{id}', 'Backend\Supplier\ProductController@view');
    Route::get('/product/create', 'Backend\Supplier\ProductController@create');
    Route::post('/product/update', 'Backend\Supplier\ProductController@update');

});
Auth::routes();
Route::get('/admin/login', 'Backend\Home@login')->name('admin-login');
Route::get('/api/subcategory/{id}','Backend\CategoryController@subcate');

Route::get('/{url}', 'Frontend\SupplierController@category_view');
Route::get('/{url}/supplier/{uri}', 'Frontend\SupplierController@supplier_view');

