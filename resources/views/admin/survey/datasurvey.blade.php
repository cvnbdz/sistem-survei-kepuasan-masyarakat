@extends('admin.layouts.dashboard')

@section('content')
    <!-- Page Heading -->
    <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <h1 class="h3 mb-0 text-gray-800">Home </h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>-->
    <!-- Page Heading -->

    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 6px;
        }

        th {
            background-color: rgb(54, 106, 210);
            color: white;
        }

        body {
            font-size: small;
        }
    </style>
    </head>


    <div class="col-md9 col-sm9 col-xs-12">
        <div class="card">
            <div class="card-header">
                <strong>DATA SURVEY</strong>
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
                            <h4>Data Survey
                                {{-- <p><a class="btn btn-info btn-sm" href="/panel/dashboard/cetak">Cetak</a> --}}
                                <p>
                            </h4>

                            <div class="d-flex justify-content-center">
                                <form action="/panel/dashboard/datasurvey " method="GET">
                                    <div class="row justify-content-center">
                                        <div class="input-group mb-3 col-12">
                                            <input type="date" class="form-control" name="start_date">
                                            <input type="date" class="form-control" name="end_date">
                                            <button class="btn btn-primary" type="submit">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @if (request()->start_date || request()->end_date)
                                @foreach ($pertanyaans as $key => $pertanyaan)
                                    @if ($pertanyaan->kategori->kuisioner->is_active == 1)
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md9 col-sm9 col-xs-12 mb-2">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <td colspan="1">{{ $pertanyaan->pertanyaan }}</td>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <canvas id="inicanvas_{{ $key }}"
                                                        style="min-width: 200px; height: 190px; max-width: 275px; margin:auto"></canvas>

                                                </div>

                                                <div class="col-md-4 mt-3">

                                                    <body>
                                                        <table>
                                                            <tr>
                                                                <th rowspan>Jml. Responden</th>
                                                                <th rowspan>Opsi</th>
                                                            </tr>
                                                            @php
                                                                $exeJawab = \App\Models\Survey::select('opsi_jawaban_id', DB::raw('(COUNT(opsi_jawaban_id)) as data, opsi_jawaban_id'))
                                                                    ->whereBetween(\Illuminate\Support\Facades\DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                                                                    ->groupBy('opsi_jawaban_id')
                                                                    ->get();
                                                                foreach ($exeJawab as $rJawab) {
                                                                    $opsi_id = $rJawab->opsi_jawaban_id;
                                                                    $nilai = $rJawab->data;
                                                                    // $jawab_id = $rJawab->opsi_jawaban_id;
                                                                    @$data[$opsi_id] = $nilai;
                                                                }
                                                                $nilai = 0;
                                                                $theNilai = [];
                                                                $theOpsi = [];
                                                            @endphp
                                                            @foreach ($pertanyaan->opsi_jawaban as $rRef)
                                                                @php
                                                                    $opsi_id = $rRef->id;
                                                                    $opsi = $rRef->opsi_jawaban;
                                                                    $nilai = @$data[$opsi_id];
                                                                    $nilai = $nilai > 0 ? $nilai : 0;
                                                                    $theNilai[] = $nilai;
                                                                    #$theOpsi[] = $nilai .' : ' .$opsi;
                                                                    $theOpsi[] = $opsi;
                                                                @endphp
                                                                <tr>
                                                                    <td>
                                                                        <center>{{ $nilai }}</center>
                                                                    </td>
                                                                    <td align="left">{{ $rRef->opsi_jawaban }}</td>

                                                                </tr>
                                                            @endforeach
                                                            @php
                                                                $numNilai = count($theNilai);
                                                                $theNilai = implode(', ', $theNilai);
                                                                $theOpsi = implode("', '", $theOpsi);
                                                            @endphp
                                                        </table>
                                                        <script>
                                                            var ctx = document.getElementById("inicanvas_{{ $key }}").getContext("2d");
                                                            // tampilan chart
                                                            var piechart = new Chart(ctx, {
                                                                type: 'pie',
                                                                data: {
                                                                    // label nama setiap Value

                                                                    labels: ['<?php echo $theOpsi; ?>'],

                                                                    datasets: [{
                                                                        // Jumlah Value yang ditampilkan
                                                                        data: [<?php echo $theNilai; ?>],

                                                                        backgroundColor: [
                                                                            'rgb(169, 169, 169)',
                                                                            'rgb(255, 99, 132)',
                                                                            '#FF8C00',
                                                                            '#FFD700',
                                                                            '#0000FF',
                                                                            '#00FF00',

                                                                        ]
                                                                    }],
                                                                }
                                                            });
                                                        </script>
                                                    </body>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <br><br>
                            </body>

                            </html>
                        @endsection
