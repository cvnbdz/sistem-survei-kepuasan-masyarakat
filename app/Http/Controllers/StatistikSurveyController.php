<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Biodata;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StatistikSurveyController extends Controller
{
    public function index(Request $request)
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $layanans = Layanan::all();

            #jumlah responden pria wanita
            $dataJenisKelamin = array();
            $listJenisKelamin = array('1' => 'Laki-Laki', '2' => 'Perempuan');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, kelamin_id"))
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
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

            #- responden by layanan
            $dataLayanan = array();
            $listJenisLayanan = array('1' => 'Baru', '2' => 'Perpanjangan', '3' => 'Peningkatan', '4' => 'Penurunan', '5' => 'Hilang/Rusak', '6' => 'Habis Masa Berlaku');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, layanan_id"))
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('layanan_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $layanan_id     = $row->layanan_id;
                $dataLayanan[$layanan_id]    = $data;
            }

            #- responden by agama
            $dataAgama = array();
            $dataLayanan = array();
            $listAgama = array('1' => 'Islam', '2' => 'Kristen', '3' => 'Katholik', '4' => 'Hindu', '5' => 'Budha', '6' => 'Konghucu', '7' => 'Kepercayaan Terhadap Tuhan YME');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, agama_id"))
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('agama_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $agama_id     = $row->agama_id;
                $dataAgama[$agama_id]    = $data;
            }

            #- responden by usia
            $dataUsia = array();
            $listUsia = array('1' => '20 Tahun Kebawah', '2' => '21-30 Tahun', '3' => '31-40 Tahun', '4' => '41-50 Tahun', '5' => '50 Tahun Keatas');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, usia_id"))
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('usia_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $usia_id     = $row->usia_id;
                $dataUsia[$usia_id]    = $data;
            }

            #- responden by pendidikan
            $dataPendidikan = array();
            $listPendidikan = array('1' => 'SD / sederajat', '2' => 'SMP / sederajat', '3' => 'SMA / sederajat', '4' => 'D1/D2', '5' => 'D3/D4', '6' => 'S1', '7' => 'S2', '8' => 'S3',);
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, pendidikan_id"))
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('pendidikan_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $pendidikan_id     = $row->pendidikan_id;
                $dataPendidikan[$pendidikan_id]    = $data;
            }

            #- responden by pekerjaan
            $dataPekerjaan = array();
            $listPekerjaan = array('1' => 'Nelayan/Petani/Peternak', '2' => 'PNS/TNI/Polri', '3' => 'Karyawan Swasta', '4' => 'Pedagang/Wiraswasta', '5' => 'Guru/Dosen', '6' => 'Dokter/Bidan/Perawat', '7' => 'Pelajar/Mahasiswa', '8' => 'Lainnya');
            $exe = Biodata::select(DB::raw("(COUNT(id)) as data, pekerjaan_id"))
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->groupBy('pekerjaan_id')
                ->get();
            foreach ($exe as $row) {
                $data     = $row->data;
                $pekerjaan_id     = $row->pekerjaan_id;
                $dataPekerjaan[$pekerjaan_id]    = $data;
            }

            #- nilai survey 
            $dataNilai = array();
            $exe = Biodata::select("nilai")
                ->where('nilai', '>', 0)
                ->where('layanan_id', $request->layanan_id)
                ->whereBetween(DB::raw('LEFT(`created_at`, 10)'), [$start_date, $end_date])
                ->get();
            $jmlData = $exe->count();
            $jmlNilai = 0;
            foreach ($exe as $row) {
                $nilai     = $row->nilai;
                $jmlNilai = $jmlNilai + $nilai;
            }
            #- hitung nilai
            $nilaiIKM = @round($jmlNilai / $jmlData, 2);
            $nilaiIKM = ($jmlNilai < 1) ? 0 : $nilaiIKM;
        } else {
            $layanans = Layanan::all();
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
        }
        return view('admin.survey.statistiksurvey', [
            'layanans' => $layanans,
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
}
