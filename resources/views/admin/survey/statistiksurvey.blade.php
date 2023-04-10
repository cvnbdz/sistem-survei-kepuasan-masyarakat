@extends('admin.layouts.dashboard')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <h2 class="fs-3 text-center my-3">Detail Survey
            {{-- <p><a class="btn btn-info btn-sm" href="#">Cetak</a> --}}
            <p>
        </h2>
        <div class="mt-2">
            <form action="/panel/dashboard/statistik-survey " method="GET">
                <div class="row justify-content-center">
                    <div class="input-group mb-3 col-6">
                        <input type="date" class="form-control" name="start_date">
                        <input type="date" class="form-control" name="end_date">
                        <select class="form-control" id="layanan_id" name="layanan_id">
                            <option selected>Pilih Jenis Layanan</option>
                            @foreach ($layanans as $layanan)
                                <option value="{{ $layanan->id }}">{{ $layanan->layanan }}
                                </option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </div>
                    @if (request()->start_date || request()->end_date)
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-5 col-md-4">
                                            <div class="card" style="width: 28rem; height: 15rem;">
                                                <div class="card-header bg-gradient-primary text-white">
                                                    <center><strong>PERIODE SURVEY</strong></center>
                                                </div>
                                                <div class="card-body bg-gradient-white text-dark text-center mt-4">
                                                    <strong class="card-text">{{ request()->start_date }}
                                                        <br>
                                                        s/d
                                                        <br>
                                                        {{ request()->end_date }}
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7 col-md-8">
                                                <div class="card" style="width: 28rem; height: 15rem;">
                                                    <div class="card-header bg-gradient-primary text-white">
                                                        <center><strong>NILAI</strong></center>
                                                    </div>
                                                    <div class="card-body text-center mt-5">
                                                        <strong class="text-black fs-4">{{ $nilaiIKM }}</strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="card" style="width: 40rem; height: 41rem;">
                                        <div class="card-header bg-gradient-primary text-white">
                                            <center><strong> LAYANAN : </strong>
                                            </center>
                                        </div>
                                        <div class="card-body text-center">
                                            <h3><span
                                                    class="badge badge-primary mb-2 col-2">{{ $listJenisLayanan[request()->layanan_id] }}</span>
                                            </h3>
                                        </div>
                                        <div class="card-header bg-gradient-primary text-white">
                                            <center><strong> RESPONDEN </strong></center>
                                        </div>
                                        <div class="card-body text-center">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                class="tabel_noborder">
                                                <tr>
                                                    <td align="right" valign="top" width="30%"><b>Jumlah Responden :
                                                        </b></td>
                                                    <td align="left" valign="top"><b>{{ $jmlResponden }}</b> orang
                                                    </td>
                                                    <td align="left" valign="top">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="top"><b>Jenis Kelamin : </b></td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataJenisKelamin[1] > 0 ? @$dataJenisKelamin[1] : 0 }}</b>
                                                        {{ $listJenisKelamin[1] }}<br>
                                                    </td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataJenisKelamin[2] > 0 ? @$dataJenisKelamin[2] : 0 }}</b>
                                                        {{ $listJenisKelamin[2] }}<br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="top"><b>Agama : </b></td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataAgama[1] > 0 ? @$dataAgama[1] : 0 }}</b>
                                                        {{ $listAgama[1] }}<br>
                                                        <b>{{ @$dataAgama[2] > 0 ? @$dataAgama[2] : 0 }}</b>
                                                        {{ $listAgama[2] }}<br>
                                                        <b>{{ @$dataAgama[3] > 0 ? @$dataAgama[3] : 0 }}</b>
                                                        {{ $listAgama[3] }}<br>
                                                        <b>{{ @$dataAgama[4] > 0 ? @$dataAgama[4] : 0 }}</b>
                                                        {{ $listAgama[4] }}<br>
                                                    </td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataAgama[5] > 0 ? @$dataAgama[5] : 0 }}</b>
                                                        {{ $listAgama[5] }}<br>
                                                        <b>{{ @$dataAgama[6] > 0 ? @$dataAgama[6] : 0 }}</b>
                                                        {{ $listAgama[6] }}<br>
                                                        <b>{{ @$dataAgama[7] > 0 ? @$dataAgama[7] : 0 }}</b>
                                                        {{ $listAgama[7] }}<br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="top"><b>Rentang Usia : </b></td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataUsia[1] > 0 ? @$dataUsia[1] : 0 }}</b>
                                                        {{ $listUsia[1] }}<br>
                                                        <b>{{ @$dataUsia[2] > 0 ? @$dataUsia[2] : 0 }}</b>
                                                        {{ $listUsia[2] }}<br>
                                                        <b>{{ @$dataUsia[3] > 0 ? @$dataUsia[3] : 0 }}</b>
                                                        {{ $listUsia[3] }}<br>
                                                    </td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataUsia[4] > 0 ? @$dataUsia[4] : 0 }}</b>
                                                        {{ $listUsia[4] }}<br>
                                                        <b>{{ @$dataUsia[5] > 0 ? @$dataUsia[5] : 0 }}</b>
                                                        {{ $listUsia[5] }}<br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="top"><b>Jenjang Pendidikan : </b></td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataPendidikan[1] > 0 ? @$dataPendidikan[1] : 0 }}</b>
                                                        {{ $listPendidikan[1] }}<br>
                                                        <b>{{ @$dataPendidikan[2] > 0 ? @$dataPendidikan[2] : 0 }}</b>
                                                        {{ $listPendidikan[2] }}<br>
                                                        <b>{{ @$dataPendidikan[3] > 0 ? @$dataPendidikan[3] : 0 }}</b>
                                                        {{ $listPendidikan[3] }}<br>
                                                        <b>{{ @$dataPendidikan[4] > 0 ? @$dataPendidikan[4] : 0 }}</b>
                                                        {{ $listPendidikan[4] }}<br>
                                                    </td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataPendidikan[5] > 0 ? @$dataPendidikan[5] : 0 }}</b>
                                                        {{ $listPendidikan[5] }}<br>
                                                        <b>{{ @$dataPendidikan[6] > 0 ? @$dataPendidikan[6] : 0 }}</b>
                                                        {{ $listPendidikan[6] }}<br>
                                                        <b>{{ @$dataPendidikan[7] > 0 ? @$dataPendidikan[7] : 0 }}</b>
                                                        {{ $listPendidikan[7] }}<br>
                                                        <b>{{ @$dataPendidikan[8] > 0 ? @$dataPendidikan[8] : 0 }}</b>
                                                        {{ $listPendidikan[8] }}<br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="top"><b>Jenis Pekerjaan : </b></td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataPekerjaan[1] > 0 ? @$dataPekerjaan[1] : 0 }}</b>
                                                        {{ $listPekerjaan[1] }}<br>
                                                        <b>{{ @$dataPekerjaan[2] > 0 ? @$dataPekerjaan[2] : 0 }}</b>
                                                        {{ $listPekerjaan[2] }}<br>
                                                        <b>{{ @$dataPekerjaan[3] > 0 ? @$dataPekerjaan[3] : 0 }}</b>
                                                        {{ $listPekerjaan[3] }}<br>
                                                        <b>{{ @$dataPekerjaan[4] > 0 ? @$dataPekerjaan[4] : 0 }}</b>
                                                        {{ $listPekerjaan[4] }}<br>
                                                    </td>
                                                    <td align="left" valign="top">
                                                        <b>{{ @$dataPekerjaan[5] > 0 ? @$dataPekerjaan[5] : 0 }}</b>
                                                        {{ $listPekerjaan[5] }}<br>
                                                        <b>{{ @$dataPekerjaan[6] > 0 ? @$dataPekerjaan[6] : 0 }}</b>
                                                        {{ $listPekerjaan[6] }}<br>
                                                        <b>{{ @$dataPekerjaan[7] > 0 ? @$dataPekerjaan[7] : 0 }}</b>
                                                        {{ $listPekerjaan[7] }}<br>
                                                        <b>{{ @$dataPekerjaan[8] > 0 ? @$dataPekerjaan[8] : 0 }}</b>
                                                        {{ $listPekerjaan[8] }}<br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endsection
