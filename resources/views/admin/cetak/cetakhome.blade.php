@extends('admin.cetak.layoutcetak')
@section('chart')
    <tr>
        <td align="center">
            <table align="center" cellpadding="0" cellspacing="0" class="tabel_data tabel_isi" border="0">
                <tbody>
                    <tr bgcolor="#CCC">
                        <td align="center" width="50" height="25"> <strong>No.</strong></td>
                        <td align="center" width="200"> <strong>Tahun</strong></td>
                        <td align="center" width="150"> <strong>Sangat Puas</strong></td>
                        <td align="center" width="150"> <strong>Puas</strong></td>
                        <td align="center" width="150"> <strong>Tidak Puas</strong></td>
                        <td align="center" width="150"> <strong>Jumlah</strong></td>
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
                                <strong>{{ $tahun }}</strong>
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
        </td>
    </tr>
@endsection
@section('script')
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
