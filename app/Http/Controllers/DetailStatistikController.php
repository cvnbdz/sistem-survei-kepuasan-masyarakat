<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Polling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Biodata;

class DetailStatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();

            $dataJenisKelamin = array();
            $listJenisKelamin = array('1' => 'Laki-Laki', '2' => 'Perempuan');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, kelamin_id"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('kelamin_id')
                ->get();
            $jmlResponden = 0;
            foreach ($exe as $row) {
                $data = $row->data;
                $kelamin_id = $row->kelamin_id;
                $dataJenisKelamin[$kelamin_id] = $data;
                $jmlResponden = $jmlResponden + $data;
            }

            $dataLayanan = array();
            $listJenisLayanan = array('1' => 'Baru', '2' => 'Perpanjangan', '3' => 'Peningkatan', '4' => 'Penurunan', '5' => 'Hilang/Rusak', '6' => 'Habis Masa Berlaku');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, layanan_id"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('layanan_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $layanan_id     = $row->layanan_id;
                $dataLayanan[$layanan_id]    = $data;
            }

            $dataAgama = array();
            $listAgama = array('1' => 'Islam', '2' => 'Kristen', '3' => 'Katholik', '4' => 'Hindu', '5' => 'Budha', '6' => 'Konghucu', '7' => 'Kepercayaan Terhadap Tuhan YME');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, agama_id"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('agama_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $agama_id     = $row->agama_id;
                $dataAgama[$agama_id]    = $data;
            }

            $dataUsia = array();
            $listUsia = array('1' => '20 Tahun Kebawah', '2' => '21-30 Tahun', '3' => '31-40 Tahun', '4' => '41-50 Tahun', '5' => '50 Tahun Keatas');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, usia_id"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('usia_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $usia_id     = $row->usia_id;
                $dataUsia[$usia_id]    = $data;
            }

            $dataPendidikan = array();
            $listPendidikan = array('1' => 'SD / sederajat', '2' => 'SMP / sederajat', '3' => 'SMA / sederajat', '4' => 'D1/D2', '5' => 'D3/D4', '6' => 'S1', '7' => 'S2', '8' => 'S3',);
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, pendidikan_id"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('pendidikan_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $pendidikan_id     = $row->pendidikan_id;
                $dataPendidikan[$pendidikan_id]    = $data;
            }

            $dataPekerjaan = array();
            $listPekerjaan = array('1' => 'Nelayan/Petani/Peternak', '2' => 'PNS/TNI/Polri', '3' => 'Karyawan Swasta', '4' => 'Pedagang/Wiraswasta', '5' => 'Guru/Dosen', '6' => 'Dokter/Bidan/Perawat', '7' => 'Pelajar/Mahasiswa', '8' => 'Lainnya');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, pekerjaan_id"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('pekerjaan_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $pekerjaan_id     = $row->pekerjaan_id;
                $dataPekerjaan[$pekerjaan_id]    = $data;
            }

            $dataNilai = array();
            $exe = Polling::select(DB::raw("(COUNT(id)) as data, nilai"))
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('nilai')
                ->get();
            $jmlDataNilai = 0;
            foreach ($exe as $row) {
                $data = $row->data;
                $nilai = $row->nilai;
                $dataNilai[$nilai] = $data;
                $jmlDataNilai = $jmlDataNilai + $data;
            }
            $data_1 = @$dataNilai[1];
            $data_2 = @$dataNilai[2];
            $data_3 = @$dataNilai[3];
            $data_4 = @$dataNilai[4];
            $data_5 = @$dataNilai[5];
            $nilai_1 = 1 * $data_1 * 20;
            $nilai_2 = 2 * $data_2 * 20;
            $nilai_3 = 3 * $data_3 * 20;
            $nilai_4 = 4 * $data_4 * 20;
            $nilai_5 = 5 * $data_5 * 20;
            $jmlNilai = $nilai_1 + $nilai_2 + $nilai_3 + $nilai_4 + $nilai_5;
            $nilaiIKM = @round($jmlNilai / $jmlDataNilai, 2);
        } else {
            $nilaiIKM = "-";
            $jmlResponden = "-";
            $dataLayanan = "-";
            $listJenisLayanan = "-";
            $dataJenisKelamin = "-";
            $listJenisKelamin = "-";
            $dataAgama = "-";
            $listAgama = "-";
            $dataUsia = "-";
            $listUsia = "-";
            $dataPendidikan = "-";
            $listPendidikan = "-";
            $dataPekerjaan = "-";
            $listPekerjaan = "-";
            // $data = Polling::latest()->get();
        }
        return view('admin.detail.detail', [
            'nilaiIKM' => $nilaiIKM,
            'jmlResponden' => $jmlResponden,
            'dataLayanan' => $dataLayanan,
            'listJenisLayanan' => $listJenisLayanan,
            'dataJenisKelamin' => $dataJenisKelamin,
            'listJenisKelamin' => $listJenisKelamin,
            'dataAgama' => $dataAgama,
            'listAgama' => $listAgama,
            'dataUsia' => $dataUsia,
            'listUsia' => $listUsia,
            'dataPendidikan' => $dataPendidikan,
            'listPendidikan' => $listPendidikan,
            'dataPekerjaan' => $dataPekerjaan,
            'listPekerjaan' => $listPekerjaan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
