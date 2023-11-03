@extends('bidang.layout.main')
@section('judul')
@endsection

@section('isi')
    <div class="card">
        <div class="card-body">

            <h1 class="card-title">Data Sub Kegiatan</h1>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST">
                <div>
                    <div>
                        <b>PROGRAM</b>
                        <p class="mt-1" value="#">Jumlah infrastruktur pendukung kemandirian pangan yang tersedia</p>
                    </div><br>
                    {{-- <h5><strong>Target Rencana Kerja</strong></h5> --}}
                    <div>
                        <div><strong>Indikator</strong></div>
                        <p class="mt-1">Penyediaan Infrastruktur Pendukung Kemandirian Pangan Lainnya</p>
                    </div>

                    <div class="col-md-6">
                        <b>2023</b>
                        <div class="form-floating">
                            <input type="number" name="target_k" class="form-control" id="floatingName"
                                placeholder="Your Name">
                            <label for="floatingName">*Input Target Kinerja</label>
                        </div>
                    </div> <br>
                    <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form><!-- End floating Labels Form -->
        </div>
    </div>
@endsection
