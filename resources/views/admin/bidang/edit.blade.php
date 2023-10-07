@extends('layout.main')

@section('judul')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Form Edit Bidang</h1>
@endsection

@section('isi')
@foreach ($bidang as $b)
<form method="POST" action="{{url('admin/bidang/update/')}}" enctype="multipart/form-data">
    {{csrf_field() }}
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$b->id}}" /><br>
    <label for="text" class="col-4 col-form-label" >{{$b->nama_bidang}}</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
        </div> 
        <input id="text" name="nama_bidang" value="{{$b->nama_bidang}}" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endforeach

@endsection