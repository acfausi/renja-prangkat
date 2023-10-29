@extends('bidang.layout.main')

@section('judul')
Halaman Home
@endsection


@section('isi')

@switch(Auth::user()->role)
    @case('admin')
        <x-dashboardAdmin/>
        @break
    @case('bidang')
    <x-dashboardBidang/>
        @break
    @case('bendahara')
      <x-dashboardBendahara/>
    @break
@endswitch

{{-- <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <!-- <div class="col-lg-8">
          <div class="row"> -->
<div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Evaluasi Kinerja</a></li>
                    <li><a class="dropdown-item" href="#">Total Kinerja</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Evaluasi<span>| Evaluasi Kinerja</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                      <a href="">Lihat</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Capaian Kinerja</a></li>
                    <li><a class="dropdown-item" href="#">Total Capaian</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Capaian<span>| Capaian Kinerja</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                      <a href="">Lihat</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Jawaban Bidang</a></li>
                    <li><a class="dropdown-item" href="#">Total Bidang</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jawaban<span>| Jawaban Bidang</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6>900</h6>
                      <span class="text-success small pt-1 fw-bold">50%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                      <a href="">Lihat</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
                         <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Evaluasi Bidang</a></li>
                    <li><a class="dropdown-item" href="#">Total Bidang</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Evaluasi<span>| Evaluasi Bidang</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                      <a href="">Lihat</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            </div>

            <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  </div>
            </div>
                  <!-- End Line Chart -->

                </div>
</section>  --}}
@endsection