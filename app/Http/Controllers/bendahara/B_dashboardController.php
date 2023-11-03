<?php

namespace App\Http\Controllers\bendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidang;
use App\Models\Program;

class B_dashboardController extends Controller
{
    //
    public function index(){
        return view('bendahara.layout.home');
    }
}
