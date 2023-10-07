@extends('layout.main')
@section('judul')

 @endsection
@section('isi')
<section class="section">
<div class="row">
    <div class="col-lg-12">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Input data program</h5>
<form class="row g-3" method="POST" action="{{url('admin/program/store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="col-md-12">
        <div class="form-floating">
            <input type="text" name="kode" class="form-control" id="floatingName" placeholder="">
            <label for="floatingName">Kode</label>
        </div>
    </div>
    <div class="col-12"> 
        <div class="form-floating">
    <select class="form-select" name="bidang_id" aria-label="Default select example">
                      <option selected="">-</option>
                      @foreach($bidang as $b)
                      <option value="{{$b->id}}">{{$b->nama_bidang}}</option>
                        @endforeach
                    </select>
                    </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <textarea class="form-control" name="urusan" placeholder="Address" id="floatingTextarea"
                style="height: 100px;"></textarea>
            <label for="floatingTextarea">Urusan</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <textarea class="form-control" name="indikator" placeholder="Address" id="floatingTextarea"
                style="height: 100px;"></textarea>
            <label for="floatingTextarea">Indikator</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-floating">
            <input type="number" name="target_k" class="form-control" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Kinerja</label>
        </div>
    </div>
    <div class="text-">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</div>
</section>



@endsection
