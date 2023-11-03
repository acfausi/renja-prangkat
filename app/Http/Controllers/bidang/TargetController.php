<?php

namespace App\Http\Controllers\bidang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidang;
use App\Models\Sub_kegiatan;
use App\Models\Target;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('bidang.target.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function getdata() 
    {
        $idbidang =  auth()->user()->bidang_id;
        $program = DB::table('program')->where('bidang_id' , $idbidang)->get();

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
                      <div> <a href="'.url('bidang/target/detail/'.$row->id).'"> '.$row->kode_k . " . " . $row->urusan .'</a></div>
                    </td>
                  </tr>
                   ';

                }

            }
        }
    }
    public function detail($id){

        $countTarget = (Target::where('sub_id',$id)->count());
        $countTarget++;

        $bidang = DB::table('bidang')->where('id',$id)->get();
        $sub_kegiatan = DB::table('sub_kegiatan')->where('id',$id)->get();
        $id = $id;
        
        return view('bidang.target.detail', compact('sub_kegiatan','id','countTarget'));
    }

    public function modif(Request $request){

        DB::table('sub_kegiatan')->where('id',$request->id)->modif([
            'urusan'=>$request->urusan,
            'indikator'=>$request->indikator,
            'target_k'=>$request->target_k, 
            'target_r'=>$request->terget_r,
        ]);
        return redirect('bidang/target/detail/'. $request->id); 
    }

    public function input($id){
        $idbidang =  auth()->user()->bidang_id;
        // $sub = DB::table('sub_kegiatan')->where('id',$idbidang)->get();
        $sub_kegiatan = DB::table('sub_kegiatan')->where('id',$id)->first();
        $id = $id;

        return view ('bidang.target.input', compact('sub_kegiatan','id'));
    }

    public function store($id,Request $request){

        $countTarget = Target::where('sub_id',$id)->count();

        if($countTarget++ > 4){

            return redirect('bidang/target/detail/'.$request->id)->with('fail','Target Sudah Lebih Dari 4');
        }else {
            DB::table('terget')->insert([
                'sub_id' => $id,
                'bidang_id'=> auth()->user()->bidang_id,
                // 'bidang_id' => $idbidang,
                'target_k' => $request->target_k,
                'name' => "Target ".  $countTarget
                
            ]);
            return redirect('bidang/target/detail/'. $request->id)->with('success','Data Berhasil Ditambahkan');
        }

     
    }

}
