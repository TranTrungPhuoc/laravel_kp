<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    function login(){
        return view('admin.login');
    }

    function processLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        if($username == 'admin' && $password == '123456'){
            // echo 'Đăng nhập thành công!';
            $request->session()->put('loginSession', 'Hello');
            // tự chuyển qua bên trang /admin/dashboard
            return redirect('/admin/dashboard');
        }
        else{
            echo 'Đăng nhập thất bại!';
        }
    }

    function logout(Request $request) {
        $request->session()->forget('loginSession');
        return redirect('/login');
    }

    function createSession(Request $request) {
        $request->session()->put('loginSession', 'Hello');
        echo 'Đã tạo Session';
    }

    function getSession(Request $request) {
        $value = $request->session()->get('loginSession');
        echo 'Giá trị session đã tạo ' . $value;
    }

    function deleteSession(Request $request) {
        $request->session()->forget('loginSession');
        echo 'Đã xóa session';
    }
}
