<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function index(Request $request) {
        $ss = $request->session()->get('loginSession');

        if(isset($ss)){
            return view('admin.index');
        }
        else{
            return view('admin.error403');
        }
    }
}
