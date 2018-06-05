<?php

Route::group(['prefix'=>'/admin','namespace'=>'Admin'],function(){
       //登陆逻辑
       require_once __DIR__.'/login.php';
        //文件上传
       Route::post('upload','BaseController@upload')->name('upload');
       Route::group(['middleware' => 'admin.auth'],function(){
           //后台首页
           Route::get('index','AdminController@index')->name('index');
           //后台欢迎页
           Route::get('welcome','AdminController@welcome')->name('welcome');
            //类型管理
           Route::resource('category','CategoryController');
       });
});