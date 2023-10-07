<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Program;
use DB;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Menampilkan data view
        $kegiatan = Kegiatan::join('program', 'kegiatan.kode','=','program.id')
        ->select('kegiatan.*','program.kode as program')
        ->get();
        return view ('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $id)
    {
              //Mengarahkan ke folder program
            //   $program = DB::table('program')->get();
            //   $kegiatan = Kegiatan::join('program', 'kegiatan.program_id','=', 'program.id')
            //   ->select('kegiatan.*', 'program.kode as program')->where('program.kode', $id)
            //   ->first();
            $program = DB::table('program')
            ->where('kode', $id)->first();
              return view ('admin.kegiatan.create', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //function request create
          DB::table('kegiatan')->insert([
            'kode_k' => $request->kode_k,
            'kode' => $request->kode,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,
        ]);
        return redirect('admin/program/detail/' . $request->kode);
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
        // dd($id);
        //ini akan diarahkan ke file edit yang ada di view
        // $kegiatan = DB::table('kegiatan')->get(); 
        // $program = DB::table('program')->where('kode', $id)->first();
        // return view ('admin.kegiatan.edit', compact('kegiatan','program'));
        $kegiatan = Kegiatan::join('program', 'kegiatan.id','=','program.id')
        ->select('kegiatan.*','program.kode as program')
        ->get();
        // dd($kegiatan);
        $program = DB::table('program')->get();
        // $kegiatan = DB::table('kegiatan')->where('kode', $id)->get(); 
        // dd($kegiatan);  
        return view ('admin.kegiatan.edit', compact('kegiatan','program'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //fungsi edit program
        // dd($request);
        // dd($request);
        DB::table('kegiatan')->where('id',$request->id)->update([
            'kode_k' => $request->kode_k,
            'kode' => $request->kode,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,

        ]);

        return redirect('admin/program/detail/' . $request->kode);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //fungsi hapus data 
        DB::table('kegiatan')->where('id', $id)->delete();
        return back();
    }
}
