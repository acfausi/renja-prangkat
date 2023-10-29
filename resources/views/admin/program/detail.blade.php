@extends('admin.layout.main')
@section('judul')

@endsection
@section('isi')
<div class="card">
    <div class="card-body">
        <h5 class="card-title" align="center">DATA PROGRAM</h5>
        <!-- Floating Labels Form -->
        <form class="row g-3">
            <div class="col-md-6">
                <div class="col-md-14">
                    <div class="form-floating">
                        <div class="form-control" id="floatingCity" placeholder="City">{{$program->target_r}}</div>
                        <label for="floatingCity">Target Rp*</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-14">
                    <div class="form-floating">
                        <div class="form-control" id="floatingCity" placeholder="City">{{$program->target_k}}</div>
                        <label for="floatingCity">Target Kinerja*</label>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <div class="form-control" placeholder="Address" id="floatingTextarea" style="height: 200px;">
                        {{$program->indikator}}</div>
                    <label for="floatingTextarea">Indikator*</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <div class="form-control" placeholder="Address" id="floatingTextarea" style="height: 200px;">
                        {{$program->urusan}}</div>
                    <label for="floatingTextarea">Urusan*</label>
                </div>
            </div>
        </form><!-- End floating Labels Form -->
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h1 class="card-title" align="center">KEGIATAN</h1>
        <!-- Bordered Tabs Justified -->
        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="home-tab" data-bs-toggle="tab"
                    data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home"
                    aria-selected="false" tabindex="-1">Kegiatan</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="profile-tab" data-bs-toggle="tab"
                    data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="true">Sub Kegiatan</button>
            </li>
        </ul>
        <div class="tab-content pt-2" id="borderedTabJustifiedContent">
            <div class="tab-pane fade" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                <a href="{{url('admin/kegiatan/create') . '/' . $program->kode}}" class="btn btn-sm btn-primary mb-3"><i class="bi bi-plus"></i>
                    Tambah</a>
                <div class="card mb-4">
                    <div class="card-header">
                        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                        <!-- membuat tombol mengarahkan ke file produk_form.php -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatablesSimple" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Kode Program</th>
                                        <th>Urusan</th>
                                        <th>Indikator</th>
                                        <th>Terget-K</th>
                                        <th>Target-R</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Kode Program</th>
                                        <th>Urusan</th>
                                        <th>Indikator</th>
                                        <th>Terget-K</th>
                                        <th>Target-R</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <!-- hapus dari baris 64 sampai 511 -->
                                    <!-- dari <tr> ke </tr> -->
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($kegiatan as $k)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$k->kode_k}}</td>
                                        <td>{{$k->kode}}</td>
                                        <td>{{$k->urusan}}</td>
                                        <td>{{$k->indikator}}</td>
                                        <td>{{$k->target_k}}</td>
                                        <td>{{$k->target_r}}</td>
                                        <td>
                                                  
                                            <button onclick="show_ubah({{$k->id}})" data-bs-toggle="modal" data-bs-target="#ubahModal" class="btn btn-primary btn-sm " title="Update"><i class="bi bi-box-arrow-in-up"></i></button>

                                            <button onclick="deleteConfir({{$k->id}})" class="btn btn-danger btn-sm " title="kgtHapus"><i
                                                class="bi bi-trash"></i></button>

                                           
                                        </td>
                                    </tr>
                                    @php
                                    $no++

                                    @endphp
                                    @endforeach

                                </tbody>

                            </table>
                        </div>


                    </div>
                </div>
            </div>
            <div class="tab-pane fade active show" id="bordered-justified-profile" role="tabpanel"
                aria-labelledby="profile-tab">
                 <div class="row mt-2 mb-3">
                    <div class="col-md-9">
                        <select name="pilih" id="pilih" class="form-control pilih">

                        </select>
                    </div>
                    <div class="col-md-3">
                        <button onclick="show_modal()" type="button" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Proses
                          </button>
                          
                    </div>  
                </div>  
                <div class="card mb-4">
                    <div class="card-header">
                        <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                        <!-- membuat tombol mengarahkan ke file produk_form.php -->
                    </div>
                    <div class="card-body">
                            <h5 class="card-title" align="center">DATA KEGIATAN</h5>
              
                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Indikator Sub</th>
                                  <th scope="col">Urusan Sub</th>
                                  <th scope="col">Kinerja Sub</th>
                                  <th scope="col">Actioon</th>
                                </tr>
                              </thead>
                              <tbody id="table-post">
                            {{-- isi table --}}
                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                          </div>
                    </div>

                </div>
                
            </div>
        </div><!-- End Bordered Tabs Justified -->
      </div><!-- End Bordered Tabs Justified -->

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="tmp-modal">
          
        </div>
      </div>
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="tmp-edit">
          
        </div>
      </div>
      <div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="kgt-edit">
      </div>
    </div>
    
</div>



<script>

    function show_modal()
    {
        var pilih = $("#pilih").val();
        if (pilih == "") {
            alert('Pilih kegiatan terlebih dahulu');
        } else {
            $.ajax({
            type : "GET",
            url : "{{ url('admin/program/showmodal') }}",
            dataType : "html",
            data : {
                pilih : pilih
            },
            success : function(data) {
                $("#tmp-modal").html(data);
            }
        })  
        }
    }



    $(document).ready(function() {
        $('.pilih').select2();
        var id = "{{ $id }}";

        $("#pilih").change(function() {
            var id = $(this).val();
            tampil_data(id);
        });

        $.ajax({
            type : "GET",
            url : '{{ url('admin/program/getkegiatan') }}',
            dataType : "html",
            data : {
                id : id
            },
            success : function(data) {
                $("#pilih").html(data);

            }
        })

    });


    function tambahData()
    {
        var id = $("#kode_k").val();
        var urusan = $("#urusan").val();
        var indikator = $("#indikator").val();
        var target =  $("#target_k").val();
        $.ajax({
            method: 'POST',
            url: '{{ url('admin/sub_kegiatan/storedata') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                "indikator" : indikator,
                "urusan" : urusan,
                "target_k" :target,
                "kode_k" : id
            },
            
            success : function() {
                tampil_data(id);
                toastr.success('berhasil disimpan');
            }
        });
    }

    function tampil_data(id)
    {
        $.ajax({
            type : "GET",
            url : '{{ url('admin/program/getsubkegiatan') }}',
            dataType : "html",
            data : {
                id : id
            }, 
            success : function(data) {
                $("#table-post").html(data);
                console.log(data);
            }
        })
    }
    // $('body').on('click', '#btn-ubah-kgt', function (){
    //     let id = $(this).data('id');

        

    // funtion edit kegiatan
    function show_ubah(id){
        $.ajax({
            type : "GET",
            url  : '{{ url('admin/program/show_ubah') }}',
            dataType : "html",
            data: {
                id : id
            },
            success : function(data){
                $("#kgt-edit").html(data);
                console.log(data);
            }
        })
    }

    function ubah(){
        var kode = $('#id_p').val();
        var id = $('#id').val();
        var urusan = $('#k_urusan').val();
        var indikator = $('#k_indikator').val();
        var target_k = $('#k_target_k').val();
        $.ajax({
            type    : "POST",
            url     : '{{url('admin/program/ubahaction') }}',
            dataType : "html",
            data    : {
                "_token": "{{ csrf_token() }}",
                "indikator" : indikator,
                "urusan" : urusan,
                "target_k" :target_k,
                "id" : id 
            },
            success : function(){
                $('#ubahModal').modal('hide');
                tampil_data(kode);
                alert('Data Berhasil Disimpan');
            }
        })

    }

function deleteConfir(id){
    console.log("hapus");
    swal.fire({
        title: "Hapus?",
        icon: 'question',
        text: "Please ensure and then confirm!",
        showCancelButton: !0,   
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: !0
    })
    .then(function (e) {

        if (e.value === true) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            let url = "{{route('program.delete',':id')}}";
            url = url.replace(':id',id);
            $.ajax({
                type: 'POST',
                url: url,
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (results) {
                    if (results.success === true) {
                        swal.fire("Done!", results.message, "success");
                        var kode = $('#id_p').val();
                        tampil_data(kode);
                        
                    } else {
                        swal.fire("Error!", results.message, "error");
                    }
                },error : (e)=>{
        
                }
            });

        } else {
            e.dismiss;
        }

    }, function (dismiss) {
        return false;
    })
}

    // function edit sub_kegiatan
    function show_edit(id)
    {
        $.ajax({
            type : "GET",
            url  : '{{ url('admin/program/show_edit') }}',
            dataType : "html",
            data: {
                id : id
            },
            success : function(data){
                $("#tmp-edit").html(data);
                console.log(data);
            }
        })
    }
    function edit(){
        var id_k = $("#id_k").val();
        var id = $("#id").val();
        var urusan = $("#sub_urusan").val();
        var indikator = $("#sub_indikator").val();
        var target =  $("#sub_target_k").val();
        $.ajax({
            type : "POST",
            url  : '{{url('admin/program/editaction')}}',
            dataType : "html",
            data: {
                "_token": "{{ csrf_token() }}",
                "indikator" : indikator,
                "urusan" : urusan,
                "target_k" :target,
                "id" : id   
            },
            success : function(){
                $('#editModal').modal('hide');
                tampil_data(id_k);
                alert('Data Berhasil Disimpan');
            }
        })
        
    }

    function hapusConfir(id){
        console.log("hapus");
        swal.fire({
            title: "Hapus?",
            icon: 'question',
            text: "Please ensure and then confirm!",
            showCancelButton: !0,   
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        })
        .then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                let url = "{{route('program.hapus',':id')}}";
                url = url.replace(':id',id);
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                            var id_k2 = $("#pilih").val();
                            tampil_data(id_k2);
                            
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    },error : (e)=>{
            
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })

        
    }

   
</script>


@endsection

