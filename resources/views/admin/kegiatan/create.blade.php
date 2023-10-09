@extends('layout.main')
@section('judul')

@endsection
@section('isi')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Data Kegiatan</h5>
                    <form class="row g-3 " method="POST"  action="{{url('admin/kegiatan/store')}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-md-12">
                                <div class="form-floating">
                                  <input type="text" name="kode_k" class="form-control @error ('kode_k') is-invalid @enderror" id="floatingName" placeholder="Your Kode Kinerja">
                                  <label for="floatingName">Kode Kegiatan</label>
                                </div>
                                @error('kode_k')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" name="kode" value="{{$program->kode}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error ('urusan') is-invalid @enderror" name="urusan" placeholder="Urusan" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Urusan</label>   
                              </div>
                              @error('urusan')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error ('indikator') is-invalid @enderror" name="indikator" placeholder="Indikator" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Indikator</label>   
                              </div>
                              @error('indikator')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="target_k"  class="form-control @error ('target_k') is-invalid @enderror" id="floatingName" placeholder="Your Kinerja">
                                <label for="floatingName">Kinerja Program</label>
                              </div>
                              @error('target_k')
                                        {{ $message }}
                                @enderror
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


{{-- @extends('layout.main')
@section('judul')

@endsection
@section('isi')
@foreach ($kegiatan as $k)
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Data Kegiatan</h5>
                    <form class="row g-3 " method="POST"  action="{{url('admin/kegiatan/update')}}"                    
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-md-12">
                               <input type="hidden" name="id" value="{{$k->id}}"/>
                                <div class="form-floating">
                                  <input type="text" name="kode_k" value="{{$k->kode_k}}" class="form-control @error ('kode_k') is-invalid @enderror" id="floatingName" placeholder="Your Kode Kinerja">
                                  <label for="floatingName">Kode</label>
                                </div>
                                @error('kode_k')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error ('urusan') is-invalid @enderror" nama="urusan" value="{{$k->urusan}}" placeholder="Urusan" id="floatingTextarea" style="height: 100px;">{{$k->urusan}}</textarea>
                                <label for="floatingTextarea">Urusan</label>   
                              </div>
                              @error('urusan')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error ('indikator') is-invalid @enderror" nama="indikator" name="{{$k->indikator}}" placeholder="Indikator" id="floatingTextarea" style="height: 100px;">{{$k->indikator}}</textarea>
                                <label for="floatingTextarea">Indikator</label>   
                              </div>
                              @error('indikator')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="number" name="target_k" value="{{$k->terget_k}}" class="form-control @error ('target_k') is-invalid @enderror" id="floatingName" placeholder="Your Kinerja">
                                <label for="floatingName">Kinerja Program</label>
                              </div>
                              @error('target_k')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="text-">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>


@endforeach
@endsection --}}