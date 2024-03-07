<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.post.main';
            return view('admin.index', [
                'main' => $main,
                'nameModule' => $this->changeNameModule($request->segment(2))
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function add(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.post.form';
            return view('admin.index', [
                'main' => $main,
                'nameModule' => $this->changeNameModule($request->segment(2))
            ]);
        }
        else{
            return view('admin.error403');
        }
    }

    function edit(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            $main = 'admin.post.form';
            return view('admin.index', [
                'main' => $main,
                'nameModule' => $this->changeNameModule($request->segment(2))
            ]);
        }
        else{
            return view('admin.error403');
        }
    }
}
