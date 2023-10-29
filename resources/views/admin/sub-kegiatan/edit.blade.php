@extends('admin.layout.main')

@section('judul')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Form Tambah Sub Kegiatan</h1>
@endsection

@section('isi')
@foreach ($sub_kegiatan as $s)
<form method="POST" action="{{url('admin/sub_kegiatan/update/')}}" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group row">
  <input type="hidden" name="id" value="{{$s->id}}"/>
    <label for="select" class="col-4 col-form-label">Kode Kegiatan</label> 
    <div class="col-8">
      <select id="select" name="kegiatan_id" class="custom-select">
        @foreach($kegiatan as $k)
        <option value="{{$k->id}}">{{$k->kode_k}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Urusan</label> 
    <div class="col-8">
    <textarea id="textarea" name="urusan" value="
    {{$s->urusan}}" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Indikator</label> 
    <div class="col-8">
    <textarea id="textarea" name="indikator" value="
    {{$s->indikator}}" cols="40" rows="5" class="form-control" ></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Kinerja</label> 
    <div class="col-8">
      <input id="text3" name="target_k" value="
    {{$k->target_k}}" type="number" class="form-control" >
    </div>
</div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endforeach
@endsection