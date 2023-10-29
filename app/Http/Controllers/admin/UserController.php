<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\User;
use DB;


class UserController extends Controller
{
    public function index(){
        // $no = 1;
        $user = User::join('bidang', 'users.bidang_id','=','bidang.id')
        ->select('users.*','bidang.nama_bidang as bidang')
        ->get();
        return view('admin.user.index', compact('user'));
        
    }

   public function create(){
    $bidang = DB::table('bidang')->get();
    $user = User::join('bidang', 'users.bidang_id','=', 'bidang.id')
    ->select('users.*', 'bidang.nama_bidang as bidang')
    ->get();
    return view ('admin.user.create', compact('user','bidang'));
   }

   public function store (Request $request) {
    DB::table('users')->insert([
        'bidang_id'=>$request->bidang_id,
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'role'=>$request->role

    ]);
    return redirect('admin/user');
   }
}
