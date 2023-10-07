<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bidang;
use DB;


class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bidang = DB::table('bidang')->get();
        return view('admin.bidang.index', compact('bidang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke view create
        return view('admin.bidang.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // function requuest create
        DB::table('bidang')->insert([
            'nama_bidang' => $request->nama_bidang,
            ]);
            return redirect('admin/bidang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //function edit mengerahkan ke view
        $bidang = DB::table('bidang')->where('id', $id)->get();
        return view ('admin.bidang.edit', compact ('bidang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //proses edit form
        DB::table('bidang')->where('id',$request->id)->update([
            'nama_bidang' => $request->nama_bidang,
        ]);
        return redirect('admin/bidang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus data 
        DB::table('bidang')->where('id',$id) ->delete();
        return back();
    }
}
