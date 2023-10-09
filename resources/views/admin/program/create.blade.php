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
                    <form class="row g-3 " method="POST"  action="{{url('admin/program/store')}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-md-12">
                                <div class="form-floating">
                                  <input type="text" name="kode" class="form-control @error ('kode') is-invalid @enderror" id="floatingName" placeholder="Your Kode">
                                  <label for="floatingName">Kode</label>
                                </div>
                                @error('kode')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select  @error ('bidang_id') is-invalid @enderror" name="bidang_id" aria-label="Default select example">
                                    <option selected="">-</option>
                                    @foreach($bidang as $b)
                                    <option value="{{$b->id}}">{{$b->nama_bidang}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">pilih select</div>
                            </div>
                            @error('bidang_id')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error ('urusan') is-invalid @enderror" nama="urusan" placeholder="Urusan" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Urusan</label>   
                              </div>
                              @error('urusan')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error ('indikator') is-invalid @enderror" nama="indikator" placeholder="Indikator" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Indikator</label>   
                              </div>
                              @error('indikator')
                                        {{ $message }}
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="number" name="target_k" class="form-control @error ('target_k') is-invalid @enderror" id="floatingName" placeholder="Your Kinerja">
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
