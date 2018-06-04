<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Login;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    //登陆页
    public function index()
    {
            return view('login/login');
    }

    //登陆验证
    public function login(Login $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (auth('admin')->attempt($credentials)) {

            return redirect(route('index'))->with('success', '登陆成功');
        } else {
            return redirect()->route('login')->with('message', '用户名或密码不正确');
        }
        return view('admin.index');
    }
    //用户退出
    public function logout()
    {
        auth('admin')->logout();
        return   redirect()->route('login');

    }
}
