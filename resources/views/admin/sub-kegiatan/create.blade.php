@extends('admin.layout.main')

@section('judul')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Form Tambah Sub Kegiatan</h1>
@endsection

@section('isi')
<form method="POST" action="{{url('admin/sub_kegiatan/storedata')}}" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="form-group row">
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
    <textarea id="textarea" name="urusan" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Indikator</label> 
    <div class="col-8">
    <textarea id="textarea" name="indikator" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Kinerja</label> 
    <div class="col-8">
      <input id="text3" name="target_k" type="number" class="form-control">
    </div>
</div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection