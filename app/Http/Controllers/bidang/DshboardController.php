<?php

namespace App\Http\Controllers\bidang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidang;
use App\Models\Program;

class DshboardController extends Controller
{
    public function index(){
        $data['jumlahbidang'] = Program::where('bidang_id', auth()->user()->bidang_id)->get();
        return view('bidang.layout.home', $data);

    }
}
