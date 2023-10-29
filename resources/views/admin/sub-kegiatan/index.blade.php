@extends('admin.layout.main')

@section('judul')
Data Program
@endsection

@section('isi')
<!-- <div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about
        DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        
    </div>
</div> -->
<a href="{{url('admin/sub_kegiatan/create')}}" class="btn btn-sm btn-primary mb-3"><i class="bi bi-plus"></i> Tambah</a>
<div class="card mb-4">
    <div class="card-header">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatablesSimple" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Kegiatan</th>
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
                        <th>Kode Kegiatan</th>
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
                    @foreach($sub_kegiatan as $s)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$s->kegiatan}}</td>
                        <td>{{$s->urusan}}</td>
                        <td>{{$s->indikator}}</td>
                        <td>{{$s->target_k}}</td>
                        <td>{{$s->target_r}}</td>
                        <td>
                            <form action="#" method="POST">

                                <a href="#" class="btn btn-warning btn-sm " title="Detail"><i class="bi bi-arrow-repeat"></i></a>
                                <a href="{{url('admin/sub_kegiatan/edit/'.$s->id)}}" class="btn btn-primary btn-sm " title="Update"><i class="bi bi-box-arrow-in-up"></i></a>
                                
                                <a href="{{url('admin/sub_kegiatan/delete/'.$s->id)}}" class="btn btn-danger btn-sm " title="Hapus"><i class="bi bi-trash"></i></a>

                            </form>
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
@endsection
