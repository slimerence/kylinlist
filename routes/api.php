<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('supplier')->group(function(){
    Route::post('profile/image/{id}','Api\Medias@upload_profile_image');
});

// 为上传图片提供的接口
Route::prefix('images')->group(function(){
    // 保存图片
    Route::post('upload','Api\Medias@upload_ajax');

    // 加载所有的图片
    Route::get('load-all','Api\Medias@load_all');
    // 加载指定产品的图片
    Route::post('product','Api\Medias@load_by_product');
    // 删除图片
    Route::post('delete','Api\Medias@delete_ajax');
});

Route::prefix('files')->group(function(){
    // 保存图片
    Route::post('upload','Api\Medias@upload_file_ajax');
    // 加载所有的图片
    Route::get('load-all','Api\Medias@load_all_files');
});

