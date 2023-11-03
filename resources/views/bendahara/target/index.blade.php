@extends('bendahara.layout.b_main')

@section('judul')
    Data Target Bendahara
@endsection

@section('isi')
    <!-- End Page Title -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Anggaran Rencana Kerja</h5>
                <!-- Small tables -->
                <table class="table table-sm">
                    <tbody id="table-get">
                        <div>
                            <b>URUSAN</b>
                        </div>
                        <td>
                            <b>1. Mencoba Dalam pangan Menggapai itu</b> <br>
                            <b>01.1 Penyediaan Infrastruktur dan Seluruh Pendukung Kemandirian Pangan sesuai Kewenangan
                                Daerah
                                Kabupaten/Kota</b>
                            <div>
                                <a href="{{ url('bendahara/target/detail') }}">01.1.1 Jumlah Koordinasi dan Sinkronisasi
                                    dalam rangka Penyediaan
                                    Infrastruktur
                                    Logistik</a>
                            </div>
                        </td>
                    </tbody>
                </table>
                <!-- End small tables -->
            </div>
        </div>
    </div>
    </div>
    </main>
@endsection
