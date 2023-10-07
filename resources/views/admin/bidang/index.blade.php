@extends('layout.main')

@section('judul')
<h1>Data Bidang</h1>
@endsection

@section('isi')
<!-- <div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more information about
        DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        
    </div>
</div> -->
<a href="{{url('admin/bidang/create')}}" class="btn btn-sm btn-primary mb-3"><i class="bi bi-plus"></i> Tambah</a>
<div class="card mb-4">
    <div class="card-header">

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="datatablesSimple" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bidang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Bidang</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($bidang as $b)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$b->nama_bidang}}</td>
                        <td>
                            <form action="#" method="POST">

                                <a href="#" class="btn btn-warning btn-sm " title="Detail"><i class="bi bi-arrow-repeat"></i></a>
                                <a href="{{url('admin/bidang/edit/'.$b->id)}}" class="btn btn-primary btn-sm " title="Update"><i class="bi bi-box-arrow-in-up"></i></a>
                                
                                <a href="{{url('admin/bidang/delete/'.$b->id)}}" class="btn btn-danger btn-sm " title="Hapus"><i class="bi bi-trash"></i></a>

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
