@extends('admin.layout.main')

@section('judul')
    Data Program
@endsection

@section('isi')
    <a href="{{ url('admin/program/create') }}" class="btn btn-sm btn-primary mb-3"><i class="bi bi-plus"></i> Tambah</a>
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
                            <th>Nama bidang</th>
                            <th>Urusan</th>
                            <th>Indikator</th>
                            <th>Target Kinerja</th>
                            <th>Target Rp</th>
                            <th>Sub Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- hapus dari baris 64 sampai 511 -->
                        <!-- dari <tr> ke </tr> -->
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($program as $p)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $p->kode }}</td>
                                <td>{{ $p->bidang }}</td>
                                <td>{{ $p->urusan }}</td>
                                <td>{{ $p->indikator }}</td>
                                <td>{{ $p->target_k }}</td>
                                <td>{{ $p->target_r }}</td>
                                <td>
                                    <a href="{{ url('admin/program/detail/' . $p->kode) }}" class="btn btn-success btn-sm "
                                        title="Lihat"><i class="bi bi-eye"></i></a>
                                </td>
                                <td>
                                    <form action="#" method="POST">

                                        <a href="#" class="btn btn-warning btn-sm " title="Detail"><i
                                                class="bi bi-arrow-repeat"></i></a>
                                        <a href="{{ url('admin/program/edit/' . $p->id) }}" class="btn btn-primary btn-sm "
                                            title="Update"><i class="bi bi-box-arrow-in-up"></i></a>

                                        <a href="{{ url('admin/program/delete/' . $p->id) }}"
                                            class="btn btn-danger btn-sm " title="Hapus"><i class="bi bi-trash"></i></a>

                                    </form>
                                </td>
                            </tr>
                            @php
                                $no++;

                            @endphp
                        @endforeach

                    </tbody>

                </table>
            </div>


        </div>
    </div>

    </div>
@endsection
