<?php

namespace App\Http\Controllers\bidang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidang;
use DB;

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

        $sub_kegiatan = DB::table('sub_kegiatan')->where('id',$id)->get();
        $id = $id;
        
        return view('bidang.target.detail', compact('sub_kegiatan','id'));
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

    public function input(){

        return view ('bidang.target.input');
    }

}