@extends('layout.main')

@section('judul')

@endsection

@section('isi')
@foreach ($program as $p)
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title" align="center">INPUT DATA PROGRAM</h1>
                    <form method="POST" action="{{url('admin/program/update/')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <input type="hidden" name="id" value="{{$p->id}}" />
                            <label for="text3" class="col-4 col-form-label">Kode</label>
                            <div class="col-8">
                                <input id="text3" name="kode" value="
                                 {{$p->kode}}" type="text" class="form-control @error ('kode') is-invalid @enderror">
                                @error('kode')
                                {{ $message }}
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="select" class="col-4 col-form-label">Bidang</label>
                            <div class="col-8">
                                <select id="select" name="bidang_id" class="custom-select">
                                    @foreach($bidang as $b)
                                    <option value="{{$b->id}}">{{$b->nama_bidang}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text3" class="col-4 col-form-label">Urusan</label>
                            <div class="col-8">
                                <textarea id="textarea" name="urusan" value="
                                   {{$p->urusan}}" cols="40" rows="5"
                                    class="form-control @error ('kode') is-invalid @enderror">{{$p->urusan}}</textarea>
                                @error('urusan')
                                {{ $message }}
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="text3" class="col-4 col-form-label">Indikator</label>
                            <div class="col-8">
                                <textarea id="textarea" name="indikator" value="
                                  {{$p->indikator}}" cols="40" rows="5"
                                    class="form-control @error ('indikator') is-invalid @enderror">{{$p->indikator}}</textarea>
                                @error('indikator')
                                {{ $message }}
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="text3" class="col-4 col-form-label">Kinerja</label>
                            <div class="col-8">
                                <input id="text3" name="target_k" value="
                                  {{$p->target_k}}" type="text"
                                    class="form-control @error ('target_k') is-invalid @enderror">
                                @error('target_k')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@endforeach
@endsection
