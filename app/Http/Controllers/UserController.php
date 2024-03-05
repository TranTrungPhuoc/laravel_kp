<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){

            // lấy dữ liệu từ db
            $users = DB::table('users')
            ->select()
            ->orderBy('id', 'desc')
            ->get();

            $main = 'admin.user.main';
            return view('admin.index', [
                'main' => $main,
                'users' => $users
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function add(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.user.form';
            return view('admin.index', [
                'main' => $main
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function register(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){

            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');

            $user = new User;
 
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
    
            $user->save();

            return response()->json([
                'msg' => 'ok'
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function delete(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){

            $id = $request->input('idDel');

            $deleted = DB::table('users')->where('id', $id)->delete();

            return response()->json([
                'msg' => $deleted,
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function edit(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.user.form';
            return view('admin.index', [
                'main' => $main
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

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
            return redirect('/login');
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
