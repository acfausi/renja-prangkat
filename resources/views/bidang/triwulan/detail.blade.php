@extends('bidang.layout.main')
@section('judul')
@endsection

@section('isi')
    @foreach ($sub_kegiatan as $tri)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Sub Kegiatan </h5>

                <!-- Floating Labels Form -->
                <form class="row g-3">
                    <div>
                        <b>Urusan</b>
                        <p value="{{ $tri->urusan }}">{{ $tri->urusan }}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title"><span>Anggran 2023</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1.000.000</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </form><!-- End floating Labels Form -->
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Realisasi Kinerja Renja</h5>

                <!-- Default Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Indikator</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $tri->indikator }}</td>
                            <td>
                                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                    data-bs-toggle="dropdown">
                                    <span class="bi bi-box-arrow-in-down"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                    @php $l = 0 @endphp
                                    @foreach ($targets as $target)
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center @if ($target->target_k == 0 || $target->realisasi_count > 0) disabled @endif"
                                                href="{{ route('triwulan.input', [$target->id_target]) }}">
                                                <span
                                                    @if ($target->realisasi_count > 0) class="bg-success text-white px-3" @endif>Realisasi
                                                    {{ $loop->iteration }}</span>
                                            </a>
                                        </li>
 
                                        @php $l = $loop->iteration @endphp
                                    @endforeach

                                    @for ($i = ++$l; $i <= 4; $i++)
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center  disabled " href="#">
                                                <span>Realisasi {{ $i }}</span>
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    @endforeach
@endsection
