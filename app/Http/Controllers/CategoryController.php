<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.category.main';
            return view('admin.index', [
                'main' => $main
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function add(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.category.form';
            return view('admin.index', [
                'main' => $main
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function edit(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.category.form';
            return view('admin.index', [
                'main' => $main
            ]);
        }
        else{
            return view('admin.error403');
        }
    }
}
