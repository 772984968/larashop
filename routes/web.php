<?php
//后台URI统一路由
include_once __DIR__ . '/admin/web.php';

Route::get('/',function (){
    die('s');
  //  return redirect(route('index'));
    //return redirect(route('login'));
});
Route::get('/admin',function (){
//    return redirect(route('index'));
   return redirect(route('login'));
});
