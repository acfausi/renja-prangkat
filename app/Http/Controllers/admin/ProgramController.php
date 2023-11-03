<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Bidang;
use App\Models\Kegiatan;
use App\Models\Sub_kegiatan;
use DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Menampilkan data view
        
        $program = Program::join('bidang', 'program.bidang_id','=','bidang.id')
        ->select('program.*','bidang.nama_bidang as bidang')
        ->get();
        return view ('admin.program.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //Mengarahkan ke folder program
        $bidang = DB::table('bidang')->get();
        $program = Program::join('bidang', 'program.bidang_id','=', 'bidang.id')
        ->select('program.*', 'bidang.nama_bidang as bidang')
        ->get();
        return view ('admin.program.create', compact('program','bidang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'numeric' => ':attribute wajib diisi angka ya cuy!!!',

        ];
        // function validasi
        $this->validate($request,[
            'kode'=> 'required',
            'urusan'=> 'required',
            'bidang_id'=> 'required',
            'indikator'=> 'required',
            // 'target_k'=> 'required|numeric'
        ],$message);
        //function request create
        DB::table('program')->insert([
            'kode' => $request->kode,
            'bidang_id' => $request->bidang_id,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,
        ]);
        return redirect('admin/program/detail/' . $request->kode);
    }

    /**
     * Display the specified resource. 
     */
    
     public function detail(string $id)
    {
        // dd($id);
        //ini akan diarahkan ke file edit yang ada di view
        $bidang = DB::table('bidang')->get();
        $program = DB::table('program') ->where('kode', $id)->first();
        $kegiatan = DB::table('kegiatan')->where('kode', $id)->get();
        $sub_kegiatan = DB::table('sub_kegiatan')->get();
        $id = $id;
        return view ('admin.program.detail', compact('program','bidang','kegiatan', 'sub_kegiatan' ,'id'));
    }

    public function modif(Request $request)
    {
        //fungsi edit program
        DB::table('program')->where('id',$request->id)->modif([
            'kode' => $request->kode,
            'bidang_id' => $request->bidang_id,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,

        ]);
        return redirect('admin/program/detail/' . $request->kode);

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //ini akan diarahkan ke file edit yang ada di view
        $bidang = DB::table('bidang')->get();
        $program = DB::table('program')->where('id', $id)->get();
        return view ('admin.program.edit', compact('program','bidang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'numeric' => ':attribute wajib diisi angka ya cuy!!!',

        ];
        // function validasi
        $this->validate($request,[
            'kode'=> 'required|numeric',
            'bidang_id'=> 'required',
            'urusan'=> 'required',
            'indikator'=> 'required',
            'target_k'=> 'required|numeric'
        ],$message);
        //fungsi edit program
        DB::table('program')->where('id',$request->id)->update([
            'kode' => $request->kode,
            'bidang_id' => $request->bidang_id,
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,

        ]);
        return redirect('admin/program');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //fungsi hapus data 
        DB::table('program')->where('id', $id)->delete();
        return back();
    }

        // table kegiatan
        public function show_ubah(){
            $id = $_GET['id'];
            $kegiatan = DB::table('kegiatan')->where('id', $id)->first();
            echo'
            <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST">
            '.csrf_field().'
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Urusan</label> 
                    <div class="col-8">
                    <textarea name="urusan" id="k_urusan"  cols="40" rows="5" class="form-control">'.$kegiatan->urusan.'</textarea>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Indikator</label> 
                    <div class="col-8">
                    <textarea name="indikator" id="k_indikator" cols="40" rows="5" class="form-control">'.$kegiatan->indikator.'</textarea>
                    </div>
                </div> 
                <input type="text" id="id_p" name="kode" hidden value="'.$kegiatan->kode.'">
                <input type="text" id="id" name="id" hidden value="'.$kegiatan->id.'">
                <button type="button" class="btn btn-primary" onclick="ubah()">Save</button>
                </form>
                    </div>
            </div>
            ';
        }
    
        public function ubahaction(Request $request){
            DB::table('kegiatan')->where('id',$request->id)->update([
                'urusan' => $request->urusan,
                'indikator' => $request->indikator,
                'target_k' => $request->target_k,
            ]);
        }
    
        public function delete ($id){
            DB::table('kegiatan')->where('id', $id)->delete();
            if ($id == 1) {
                $success = true;
                $message = "User deleted successfully";
            } else {
                $success = true;
                $message = "User not found";
            }
    
            //  Return response
            return response()->json([
                'success' => $success,
                'message' => $message,
            ]);
        }


        // table subkegiatan
    public function get_kegiatan() {
        $id = $_GET['id'];

        $kegiatan = DB::table('kegiatan')->where('kode', $id)->get();
        echo '<option></option>';

        foreach($kegiatan as $get) {
            echo '<option value="'. $get->kode_k .'">' . $get->kode_k . " | " . $get->urusan . '</option>';
        }
    
    }

    public function show_modal() 
    {
        $id = $_GET['pilih'];
        $kegiatan = DB::table('kegiatan')->where('kode_k', $id)->first();

        echo '
        <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">'. $kegiatan->kode_k .'</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tr>
                <td>Urusan</td>
                <td>:</td>
                <td>'. $kegiatan->urusan .'</td>
            </tr>
            <tr>
                <td>Indikator</td>
                <td>:</td>
                <td>'. $kegiatan->indikator .'</td>
            </tr>
            <tr>
                <td>Urusan</td>
                <td>:</td>
                <td>'. $kegiatan->target_k .'</td>
            </tr>
        </table>
        <form method="POST" action="'. url('admin/sub_kegiatan/storedata')  .'">
        '. csrf_field() .'
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Urusan</label> 
                <div class="col-8">
                <textarea name="urusan" id="urusan" cols="40" rows="5" class="form-control"></textarea>
                </div>
            </div> 
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Indikator</label> 
                <div class="col-8">
                <textarea name="indikator" id="indikator" cols="40" rows="5" class="form-control"></textarea>
                </div>
            </div> 
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Target Kinerja</label> 
                <div class="col-8">
                <input type="number" id="target_k" name="target_k" class="form-control"
                placeholder="Input Kinerja* ">
                </div>
            </div> 
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Target Keuangan</label> 
                <div class="col-8">
                <input type="number" id="target_r" name="target_r" class="form-control"
                placeholder="Input Anggaran* ">
                </div>
            </div> 
            <input type="text" id="kode_k" name="kode_k" hidden value="'. $kegiatan->kode_k .'">
            <button type="button" class="btn btn-primary" onclick="tambahData()">Save</button>
            </form>
                </div>
        </div>
        ';
    
    
    }


    public function getsubkegiatan() {
        $id = $_GET['id'];
        $no = 1;
        $sub_kegiatan = DB::table('sub_kegiatan')->where('kode_k', $id)->get();
        foreach($sub_kegiatan as $get) {
            echo '
                <tr>
                    <td>'.$no++.'</td>
                    <td>'. $get->indikator .'</td>
                    <td>'. $get->urusan .'</td>
                    <td>'. $get->target_k .'</td>
                    <td>'. $get->target_r .'</td>
                    <td>    
                    <button onclick="show_edit('.$get->id.')" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-primary btn-sm " title="Update"><i
                            class="bi bi-box-arrow-in-up"></i></button>

                    <button onclick="hapusConfir('.$get->id.')" class="btn btn-danger btn-sm " title="Hapus"><i
                            class="bi bi-trash"></i></button>
                    </td>
                </tr>
            ';
        }
    }

    public function show_edit(){
        $id = $_GET['id'];
        $sub_kegiatan = DB::table('sub_kegiatan')->where('id', $id)->first();
        echo'
        <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST">
        '. csrf_field() .'
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Urusan</label> 
                <div class="col-8">
                <textarea name="urusan" id="sub_urusan"  cols="40" rows="5" class="form-control">'.$sub_kegiatan->urusan.'</textarea>
                </div>
            </div> 
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Indikator</label> 
                <div class="col-8">
                <textarea name="indikator" id="sub_indikator" cols="40" rows="5" class="form-control">'.$sub_kegiatan->indikator.'</textarea>
                </div>
            </div> 
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Target Kinerja</label> 
                <div class="col-8">
                <input type="number" id="target_k" name="target_k" value="'. $sub_kegiatan->target_k .'" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Target Keuangan</label> 
                <div class="col-8">
                <input type="number" id="target_r" name="target_r" value="'. $sub_kegiatan->target_r .'" class="form-control">
                </div>
            </div>
            <input type="text" id="id_k" name="id_k" hidden value="'. $sub_kegiatan->kode_k .'">
            <input type="text" id="id" name="id" hidden value="'. $sub_kegiatan->id .'">
            <button type="button" class="btn btn-primary" onclick="edit()">Save</button>
            </form>
                </div>
        </div>
        ';
    }
    public function editaction(Request $request){
        DB::table('sub_kegiatan')->where('id',$request->id)->update([
            'urusan' => $request->urusan,
            'indikator' => $request->indikator,
            'target_k' => $request->target_k,
            'target_r' => $request->target_r,

        ]);

    }

    public function hapus ($id){
        DB::table('sub_kegiatan')->where('id', $id)->delete();
        if ($id == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
    
    


}

