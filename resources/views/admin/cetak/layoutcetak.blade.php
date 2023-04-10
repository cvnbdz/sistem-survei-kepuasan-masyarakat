<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/cetak.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>IKM : Polres Karanganyar</title>
</head>

<body>
    <table align="center" cellpadding="0" cellspacing="0" class="kop" border="0">
        <tbody>
            <tr>
                <td align="center">
                    <img src="/img/polri.png" width="80px"border="0" class="logo_kop">
                </td>
                <td align="center">
                    <font class="f30"><strong>SATLANTAS POLRES KARANGANYAR</strong></font><br>
                    <font class="f20">Jl. Lawu, Dompon, Karanganyar, Kec. Karanganyar, Kab Karanganyar<br>
                        Jawa Tengah Kodepos 57711</font>
                </td>
                <td align="center">
                    <img src="/img/logo.png" width="70px" border="0" class="logo_kop"></a>
                </td>
            </tr>
            <td colspan="3">
                <hr size="3" color="#000">
            </td>
            <table align="center" cellpadding="0" cellspacing="0" class="tabel_isi" border="0">
                <tbody>
                    <tr>
                        <td align="center">
                            <font class="f20"><strong>Statistik Indeks Kepuasan Masyarakat</strong></font>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            {{-- <canvas id="canvas" style="display: block; width: 850px; height: 425px;" width="850" height="425" class="chartjs-render-monitor"></canvas> --}}
                            <canvas id="myChart" class="chartjs-render-monitor"></canvas>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">&nbsp; </td>
                    </tr>
                    @yield('chart')
                </tbody>
            </table>
        </tbody>
    </table>
    @yield('script')
</body>

</html>
