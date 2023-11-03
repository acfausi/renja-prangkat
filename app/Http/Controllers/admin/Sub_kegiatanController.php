<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Sub_kegiatan;
use DB;

class Sub_kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan view
        $sub_kegiatan = Sub_kegiatan::join('kegiatan', 'sub_kegiatan.kegiatan_id','=','kegiatan.id')
        ->select('sub_kegiatan.*','kegiatan.kode_k as kegiatan')
        ->get();
        return view ('admin.sub-kegiatan.index', compact('sub_kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mengarahkan ke folder sub-kegiatan
        $kegiatan = DB::table('kegiatan')->get();
        $sub_kegiatan = sub_kegiatan::join('kegiatan', 'sub_kegiatan.kegiatan_id','=', 'kegiatan.id')
        ->select('sub_kegiatan.*', 'kegiatan.kode_k as kegiatan')
        ->get();
        return view ('admin.sub-kegiatan.create', compact('sub_kegiatan','kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storedata(Request $request)
    {
          //function request create
          DB::table('sub_kegiatan')->insert([
            'kode_k' => $request->kode_k,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,
            'target_r' => $request->target_r
            // 'target_k' => $request->target_k
        ]);
        // return redirect('admin/sub_kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
            //ini akan diarahkan ke file edit yang ada di view
                $kegiatan = DB::table('kegiatan')->get();
                $sub_kegiatan = DB::table('sub_kegiatan')->where('id', $id)->get();
                return view ('admin.sub-kegiatan.edit', compact('sub_kegiatan','kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //fungsi edit program
        DB::table('sub_kegiatan')->where('id',$request->id)->update([
            'kegiatan_id' => $request->kegiatan_id,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            // 'target_k' => $request->target_k,

        ]);
        return redirect('admin/sub_kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //fungsi hapus data 
        DB::table('sub_kegiatan')->where('id', $id)->delete();
        return back();
    }
}
