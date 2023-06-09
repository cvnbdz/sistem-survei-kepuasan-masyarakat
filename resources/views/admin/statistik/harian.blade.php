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
                    <div id="container" style="width: 90%; text-align: center" align="center">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class></div>
                            </div>
                            <h4>Statistik Indeks Kepuasan Masyarakat Polres Karanganyar Tanggal <span id="tanggal"></span>
                                {{-- <p><a class="btn btn-info btn-sm" href="/panel/dashboard/cetak/harian">Cetak</a> --}}
                                <p>
                            </h4>
                            <div class="mx-auto" style="position: relative; height: 533px; width: 533px;">
                                <canvas id="myChart" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                </center>
            </div class="table-responsive">
            <table align="center" cellpadding="0" cellspacing="0" class="table" border="0">
                <tbody>
                    <tr bgcolor="#CCC">
                        <td align="center" width="50" height="25">
                            <strong>No.</strong>
                        </td>
                        <td align="center" width="200">
                            <strong>Tanggal</strong>
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
                    @foreach ($listTanggal as $key => $value)
                        @php
                            $tanggal = $key;
                            $sangat_puas = @$listSangatPuas[$tanggal] == '' ? 0 : @$listSangatPuas[$tanggal];
                            $puas = @$listPuas[$tanggal] == '' ? 0 : @$listPuas[$tanggal];
                            $tidak_puas = @$listTidakPuas[$tanggal] == '' ? 0 : @$listTidakPuas[$tanggal];
                            $jumlah = $sangat_puas + $puas + $tidak_puas;
                            
                            $count_sangat_puas = $count_sangat_puas + $sangat_puas;
                            $count_puas = $count_puas + $puas;
                            $count_tidak_puas = $count_tidak_puas + $tidak_puas;
                            $count_jumlah = $count_jumlah + $jumlah;
                            
                            $row_color = $i % 2 == 0 ? '#f2f2f2' : '#ffffff';
                        @endphp
                        <tr bgcolor="<?php echo $row_color; ?>">
                            <td align="center" height="25"><?php echo $i++; ?></td>
                            <td align="center"> {{ $tanggal }} </td>
                            <td align="center">{{ $sangat_puas }}</td>
                            <td align="center">{{ $puas }}</td>
                            <td align="center">{{ $tidak_puas }}</td>
                            <td align="center"><a href="#" data-toggle="modal" data-target="#cmsModalCenter"
                                    style="color: #000; text-decoration: none;">{{ $jumlah }}</a></td>
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
    </div>

    <script>
        function tanggal(dateParam, monthParam, yearParam) {
            var date = new Date();
            var tahun = date.getFullYear();
            var bulan = monthParam ? (+monthParam - 1) : date.getMonth();
            var tanggal = date.getDate();

            switch (bulan) {
                case 0:
                    bulan = "Januari";
                    break;
                case 1:
                    bulan = "Februari";
                    break;
                case 2:
                    bulan = "Maret";
                    break;
                case 3:
                    bulan = "April";
                    break;
                case 4:
                    bulan = "Mei";
                    break;
                case 5:
                    bulan = "Juni";
                    break;
                case 6:
                    bulan = "Juli";
                    break;
                case 7:
                    bulan = "Agustus";
                    break;
                case 8:
                    bulan = "September";
                    break;
                case 9:
                    bulan = "Oktober";
                    break;
                case 10:
                    bulan = "November";
                    break;
                case 11:
                    bulan = "Desember";
                    break;
            }

            var tampilTanggal = (dateParam || tanggal) + " " + bulan + " " + (yearParam || tahun);
            document.getElementById("tanggal").innerHTML = tampilTanggal;
        }

        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });

        let dateParam = params.h;
        let monthParam = params.b;
        let yearParam = params.t;

        tanggal(dateParam, monthParam, yearParam);

        const data = {
            labels: [
                'Sangat Puas',
                'Puas',
                'Tidak Puas',
            ],
            datasets: [{
                label: 'Statistik Harian',
                data: [{{ $labelSangatPuas }}, {{ $labelPuas }}, {{ $labelTidakPuas }}],
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 99, 132)',
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'pie',
            data: data,
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
