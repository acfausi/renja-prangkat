@extends('bidang.layout.main')
@section('judul')

@endsection

@section('isi')
<div class="card">
    <div class="card-body">
        
        <h1 class="card-title">Data Sub Kegiatan</h1>
        
        <!-- Floating Labels Form -->
        <form class="row g-3">
            <div>
                <h5><strong>Urusan</strong></h5>
                <p class="mt-1">Lumbung pangan pada pertanian bawang merah</p>
            </div>
            <div>
                <h5><strong>Indikator</strong></h5>
                <p class="mt-1">Lumbung pangan pada pertanian bawang merah</p>
            </div>
            <div class="col-md-6">
                <b>2023</b>
                <div class="form-floating">
                  <input type="number" class="form-control" id="floatingName" placeholder="Your Name">
                  <label for="floatingName">*Input Target Kinerja</label>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
        </form><!-- End floating Labels Form -->
    </div>
</div>

@endsection
