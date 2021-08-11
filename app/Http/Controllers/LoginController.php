<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class LoginController extends Controller
{
    function login(Request $request){
    
       $user = Login::where('email', $request->email)->first();
       
       if(!$user || Hash::check($request->password, $user->password) === false){
           //return redirect('login');
           return back()->with('error','Email or password did not match.');
       }else{
           $request->session()->put('user', $user);
           return redirect('/');
       }
        //return $request->input();
    }
}
