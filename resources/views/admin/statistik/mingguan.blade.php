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
                            <h4>Statistik Mingguan Indeks Kepuasan Masyarakat Polres Karanganyar</span>
                                {{-- <p><a class="btn btn-info btn-sm" href="/panel/dashboard/cetak">Cetak</a> --}}
                                {{-- <p> --}}
                                <form action="/panel/dashboard/statistik/mingguan" method="GET">
                                    <div class="row justify-content-center">
                                        <div class="input-group mt-3 mb-3 col-6">
                                            <input type="date" class="form-control" name="start_date">
                                            <input type="date" class="form-control" name="end_date">
                                            <button class="btn btn-primary" type="submit">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </h4>
                            @if (request()->start_date || request()->end_date)
                                <div class="mx-auto" style="position: relative;">
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
                            [$tahun, $bulan, $tanggal] = explode('-', $key, 3);
                            $sangat_puas = @$listSangatPuas[$key] == '' ? 0 : @$listSangatPuas[$key];
                            $puas = @$listPuas[$key] == '' ? 0 : @$listPuas[$key];
                            $tidak_puas = @$listTidakPuas[$key] == '' ? 0 : @$listTidakPuas[$key];
                            $jumlah = $sangat_puas + $puas + $tidak_puas;
                            
                            $count_sangat_puas = $count_sangat_puas + $sangat_puas;
                            $count_puas = $count_puas + $puas;
                            $count_tidak_puas = $count_tidak_puas + $tidak_puas;
                            $count_jumlah = $count_jumlah + $jumlah;
                            
                            $row_color = $i % 2 == 0 ? '#f2f2f2' : '#ffffff';
                        @endphp
                        <tr bgcolor="<?php echo $row_color; ?>">
                            <td align="center" height="25"><?php echo $i++; ?></td>
                            <td align="center"><strong>{{ $tanggal }}-{{ $bulan }}-{{ $tahun }}</strong>
                            </td>
                            <td align="center"><?php echo $sangat_puas; ?></td>
                            <td align="center"><?php echo $puas; ?></td>
                            <td align="center"><?php echo $tidak_puas; ?></td>
                            <td align="center"><?php echo $jumlah; ?></td>
                        </tr>
                    @endforeach
                    <tr bgcolor="#CCC">
                        <td align="right" height="25" colspan="2"> <strong>Total</strong></td>
                        <td align="center"> <strong><?php echo $count_sangat_puas; ?></strong></td>
                        <td align="center"> <strong><?php echo $count_puas; ?></strong></td>
                        <td align="center"> <strong><?php echo $count_tidak_puas; ?></strong></td>
                        <td align="center"> <strong><?php echo $count_jumlah; ?></strong></td>
                    </tr>
                </tbody>
            </table>
            @endif
        </div>
    </div>
    </div>

    <script>
        let labels = [];

        for (let i = 1; i <= 14; i++) {
            labels.push(String(i));
        }

        const data = {
            labels: [<?php echo $labelTanggal; ?>],
            datasets: [{
                    label: 'Sangat Puas',
                    data: [<?php echo $labelSangatPuas; ?>],
                    fill: false,
                    borderColor: 'rgb(54, 162, 235)',
                    tension: 0.4,
                },
                {
                    label: 'Puas',
                    data: [<?php echo $labelPuas; ?>],
                    fill: false,
                    borderColor: 'rgb(255, 205, 86)',
                    tension: 0.4,
                },
                {
                    label: 'Tidak Puas',
                    data: [<?php echo $labelTidakPuas; ?>],
                    fill: false,
                    borderColor: 'rgb(255, 99, 132)',
                    tension: 0.4,
                }
            ]
        };

        const config = {
            type: 'line',
            data: data,
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
