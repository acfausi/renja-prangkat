@extends('layout.main')

@section('judul')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Form Tambah Bidang</h1>
@endsection

@section('isi')
<form method="POST" action="{{url('admin/bidang/store')}}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group row needs-validation" novalidate>
    <label for="text1" class="col-4 col-form-label">Nama bidang</label> 
    <div class="col-8">
      <input id="text1" name="nama_bidang" type="text" class="form-control @error ('nama_bidang') is-invalid @enderror" placeholder="Masukan Nama Produk">
      @error('nama_bidang')
              {{ $message }}
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</form>

@endsection