<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;


class SesiController extends Controller
{
    //
    public function index(){
        return view('login');
    }
    function login(Request $request){
        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            // if (Auth::user()->role == 'admin'){
                return redirect('/admin');
            // }elseif (Auth::user()->role == 'bidang'){
            //     return redirect('/bidang');
            // }elseif (Auth::user()->role == 'bendahara'){
            //     return redirect('bendahara/');
            // }

        }else{
            return redirect('')->withErrors('Username dan password salah')->withInput();
        }
    }

}
