<?php

namespace App\Http\Controllers\bidang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidang;
use App\Models\Realisasi;
use App\Models\Target;
use DB;

class TriwulanController extends Controller
{
    //
    public function index(){
        
    return view('bidang.triwulan.index');
    }

    public function tridata(){
        $bidang =  auth()->user()->bidang_id;
        $program = DB::table('program')->where('bidang_id' , $bidang)->get();

        foreach($program as $get) {
            // echo $get->urusan;
            echo '<tr>
                <th>'.$get->urusan.'</th>
                </tr>';
            
            $kegiatan = DB::table('kegiatan')->where('kode', $get->kode)->get();
            
            foreach ($kegiatan as $val) {
                echo'
                <tr>
                <th>'.$val->kode . ". " . $val->urusan .'</th>
                </tr>
                    ';
                $subkeagiatan = DB::table('sub_kegiatan')->where('kode_k', $val->kode_k)->get();

                foreach ($subkeagiatan as $row) {
                    echo'
                    <tr>
                    <td>
                      <div> <a href="'.url('bidang/triwulan/detail/'.$row->id).'"> '.$row->kode_k . " . " . $row->urusan .'</a></div>
                    </td>
                  </tr>
                   ';

                }

            }
        }
    }
    public function detail($id){

        $targets = Target::where('sub_id',$id)->withCount('realisasi')->get();

        $sub_kegiatan = DB::table('sub_kegiatan')->where('id',$id)->get();
        $id = $id;
        
        return view('bidang.triwulan.detail', compact('sub_kegiatan','id','targets'));
    }
    public function store(Request $request){
        $target = Target::where('id_target',$request->target_id)->first();
        Realisasi::insert([
            'sub_id'=>$target->sub_id,
            'bidang_id'=>$target->bidang_id,
            'target_id'=>$request->target_id,
            'rea_k'=>$request->rea_k,
        ]);

        return redirect('/bidang/triwulan/detail/'.$target->sub_id)->with('success','Data Triwulan Berhasil ditambahkan');
    }

    public function input($id){
        return view ('bidang.triwulan.input',compact('id'));
    }
    
}
