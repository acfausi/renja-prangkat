<?php

namespace App\Http\Controllers\bendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class B_targetController extends Controller
{
    //
    public function index(){
        return view('bendahara.target.index');
    }

    public function detail(){
        return view('bendahara.target.detail');
    }
    public function input(){
        return view('bendahara.target.input');
    }
}
