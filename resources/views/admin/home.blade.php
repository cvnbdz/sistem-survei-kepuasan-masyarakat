@extends('admin.layouts.dashboard')

@section('content')
    <!-- Page Heading -->
    <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <h1 class="h3 mb-0 text-gray-800">Home </h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>-->
    <!-- Page Heading -->
    <div class="col-md9 col-sm9 col-xs-12">
        <div class="card">
            <div class="card-header">
                <strong>INDEKS KEPUASAN MASYARAKAT</strong>
            </div>
            <div class="card-body">
                <center>
                    <div id="container" style="width: 50%; text-align: center" align="center">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class></div>
                            </div>
                            <h4>Statistik Indeks Kepuasan Masyarakat Polres Karanganyar Tanggal <span id="tanggal"></span>
                                <p><a class="btn btn-info btn-sm" href="/panel/dashboard/cetak/home">Cetak</a>
                                <p>
                            </h4>
                            {{-- <div class="mx-auto" style="position: relative; height: 300px; width: 533px;"> --}}
                            <canvas id="myChart" class="chartjs-render-monitor"></canvas>
                            {{-- </div> --}}
                        </div>
                </center>
            </div>
            <div class="table-responsive">
                <table align="center" cellpadding="0" cellspacing="0" class="table" border="0">
                    <tbody>
                        <tr bgcolor="#CCC">
                            <td align="center" width="50" height="25">
                                <strong>No.</strong>
                            </td>
                            <td align="center" width="200">
                                <strong>Tahun</strong>
                            </td>
                            <td align="center" width="200">
                                <strong>Sangat Puas</strong>
                            </td>
                            <td align="center" width="150">
                                <strong>Puas</strong>
                            </td>
                            <td align="center" width="150">
                                <strong>Tidak Puas</strong>
                            </td>
                            <td align="center" width="200">
                                <strong>Jumlah</strong>
                            </td>
                        </tr>
                        @php
                            $i = 1;
                            $count_sangat_puas = 0;
                            $count_puas = 0;
                            $count_tidak_puas = 0;
                            $count_jumlah = 0;
                        @endphp
                        @foreach ($listTahun as $key => $value)
                            @php
                                $tahun = $key;
                                $sangat_puas = @$listSangatPuas[$tahun] == '' ? 0 : @$listSangatPuas[$tahun];
                                $puas = @$listPuas[$tahun] == '' ? 0 : @$listPuas[$tahun];
                                $tidak_puas = @$listTidakPuas[$tahun] == '' ? 0 : @$listTidakPuas[$tahun];
                                $jumlah = $sangat_puas + $puas + $tidak_puas;
                                
                                $count_sangat_puas = $count_sangat_puas + $sangat_puas;
                                $count_puas = $count_puas + $puas;
                                $count_tidak_puas = $count_tidak_puas + $tidak_puas;
                                $count_jumlah = $count_jumlah + $jumlah;
                                
                                $row_color = $i % 2 == 0 ? '#f2f2f2' : '#ffffff';
                            @endphp
                            <tr bgcolor="{{ $row_color }}">
                                <td align="center" height="25">{{ $i++ }}</td>
                                <td align="center">
                                    <a href="#">
                                        <strong>{{ $tahun }}</strong>
                                    </a>
                                </td>
                                <td align="center">{{ $sangat_puas }}</td>
                                <td align="center">{{ $puas }}</td>
                                <td align="center">{{ $tidak_puas }}</td>
                                <td align="center">{{ $jumlah }}</td>
                            </tr>
                        @endforeach
                        <tr bgcolor="#CCC">
                            <td align="right" height="25" colspan="2"> <strong>Total</strong></td>
                            <td align="center"> <strong>{{ $count_sangat_puas }}</strong></td>
                            <td align="center"> <strong>{{ $count_puas }}</strong></td>
                            <td align="center"> <strong>{{ $count_tidak_puas }}</strong></td>
                            <td align="center"> <strong>{{ $count_jumlah }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            const data = {
                labels: [{{ $labelTahun }}],
                datasets: [{
                    label: 'Sangat Puas',
                    data: [{{ $labelSangatPuas }}],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                    ],
                }, {
                    label: 'Puas',
                    data: [{{ $labelPuas }}],
                    backgroundColor: [
                        'rgb(255, 205, 86)',
                    ],
                }, {
                    label: 'Tidak Puas',
                    data: [{{ $labelTidakPuas }}],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                    ],
                }]
            };

            const config = {
                type: 'bar',
                data: data,
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endsection
