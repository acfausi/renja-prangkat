@extends('admin.layout.main')

@section('judul')
Data User
@endsection

@section('isi')

<a href="{{url('admin/user/create')}}" class="btn btn-sm btn-primary mb-3"><i class="bi bi-plus"></i> Tambah</a>
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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($user as $us)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        <td>{{$us->role}}</td>
                        <td>
                            <button onclick="" data-bs-toggle="modal" data-bs-target="#editModal"
                                class="btn btn-primary btn-sm " title="Update"><i
                                    class="bi bi-box-arrow-in-up"></i></button>

                            <button onclick="" class="btn btn-danger btn-sm " title="Hapus"><i
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


@endsection
