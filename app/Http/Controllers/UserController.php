<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function index(){
        $data = array();
        $data['file'] = 'user.index';
        $data['title'] = 'User List';

        return view('dashboard', ['data' => $data]);
    }

    function logout(Request $request){
        $request->session()->forget('user');
        return redirect('login');
    }
}
