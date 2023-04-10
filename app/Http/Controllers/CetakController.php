<?php

namespace App\Http\Controllers;

use carbon\carbon;
use App\Models\Polling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetakController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cetakHome()
    {
        $exe = Polling::select(DB::raw("LEFT(created_at, 4) as tahun"))
            ->groupBy(DB::raw("LEFT(created_at, 4)"))
            ->orderBy(DB::raw("LEFT(created_at, 4)"), 'ASC')
            ->get();

        $listTahun         = array();
        $listSangatPuas    = array();
        $listPuas        = array();
        $listTidakPuas    = array();

        foreach ($exe as $row) {
            $listTahun[$row->tahun] = "" . $row->tahun . "";
            $listSangatPuas[$row->tahun] = 0;
            $listPuas[$row->tahun] = 0;
            $listTidakPuas[$row->tahun] = 0;
        }
        $labelTahun = implode(', ', $listTahun);

        #-- Data Sangat Puas
        $exe = Polling::select(DB::raw("LEFT(created_at, 4) as tahun"), DB::raw("(COUNT(id)) as data"))
            ->where('nilai', 5)
            ->groupBy(DB::raw("LEFT(created_at, 4)"))
            ->orderBy(DB::raw("LEFT(created_at, 4)"), 'ASC')
            ->get();
        foreach ($exe as $row) {
            $listSangatPuas[$row->tahun] = $row->data;
        }
        $labelSangatPuas = implode(', ', $listSangatPuas);

        #-- Data Puas
        $exe = Polling::select(DB::raw("LEFT(created_at, 4) as tahun"), DB::raw("(COUNT(id)) as data"))
            ->where('nilai', 4)
            ->groupBy(DB::raw("LEFT(created_at, 4)"))
            ->orderBy(DB::raw("LEFT(created_at, 4)"), 'ASC')
            ->get();
        foreach ($exe as $row) {
            $listPuas[$row->tahun] = $row->data;
        }
        $labelPuas = implode(', ', $listPuas);

        #-- Data Tidak Puas
        $exe = Polling::select(DB::raw("LEFT(created_at, 4) as tahun"), DB::raw("(COUNT(id)) as data"))
            ->where('nilai', 2)
            ->groupBy(DB::raw("LEFT(created_at, 4)"))
            ->orderBy(DB::raw("LEFT(created_at, 4)"), 'ASC')
            ->get();
        foreach ($exe as $row) {
            $listTidakPuas[$row->tahun] = $row->data;
        }
        $labelTidakPuas = implode(',', $listTidakPuas);



        return view('admin.cetak.cetakhome', [
            'labelTahun' => $labelTahun,
            'labelSangatPuas' => $labelSangatPuas,
            'labelPuas' => $labelPuas,
            'labelTidakPuas' => $labelTidakPuas,
            'listTahun' => $listTahun,
            'listSangatPuas' => $listSangatPuas,
            'listPuas' => $listPuas,
            'listTidakPuas' => $listTidakPuas,
        ]);
    }

    public function cetakHarian()
    {
        $tahun_ini = Carbon::now()->format('Y');
        $bulan_ini = Carbon::now()->format('Y-m');
        $hari_ini = Carbon::now()->format('Y-m-d');
        #-- tanggal
        $listTanggal             = array();
        $listTanggal[$hari_ini]    = $hari_ini;

        #-- Data Sangat Puas
        $exe = Polling::select(DB::raw("LEFT(created_at, 10) as tanggal"), DB::raw("(COUNT(nilai)) as data"))
            ->where('nilai', 5)
            ->where(DB::raw("LEFT(created_at, 10)"), $hari_ini)
            ->groupBy(DB::raw("LEFT(created_at, 10)"))
            ->orderBy(DB::raw("LEFT(created_at, 10)"), 'ASC')
            ->get();
        // dd($exe);
        $listSangatPuas = array();
        foreach ($exe as $row) {
            $listSangatPuas[$row->tanggal] = $row->data;
        }
        $labelSangatPuas = implode(', ', $listSangatPuas);

        #-- Data Puas
        $exe = Polling::select(DB::raw("LEFT(created_at, 10) as tanggal"), DB::raw("(COUNT(nilai)) as data"))
            ->where('nilai', 4)
            ->where(DB::raw("LEFT(created_at, 10)"), $hari_ini)
            ->groupBy(DB::raw("LEFT(created_at, 10)"))
            ->orderBy(DB::raw("LEFT(created_at, 10)"), 'ASC')
            ->get();
        $listPuas = array();
        foreach ($exe as $row) {
            $listPuas[$row->tanggal] = $row->data;
        }
        $labelPuas = implode(', ', $listPuas);

        #-- Data Tidak Puas
        $exe = Polling::select(DB::raw("LEFT(created_at, 10) as tanggal"), DB::raw("(COUNT(nilai)) as data"))
            ->where('nilai', 2)
            ->where(DB::raw("LEFT(created_at, 10)"), $hari_ini)
            ->groupBy(DB::raw("LEFT(created_at, 10)"))
            ->orderBy(DB::raw("LEFT(created_at, 10)"), 'ASC')
            ->get();
        $listTidakPuas = array();
        foreach ($exe as $row) {
            $listTidakPuas[$row->tanggal] = $row->data;
        }
        $labelTidakPuas = implode(',', $listTidakPuas);

        return view('admin.cetak.cetakharian', [
            'labelSangatPuas' => $labelSangatPuas,
            'labelPuas' => $labelPuas,
            'labelTidakPuas' => $labelTidakPuas,
            'listTanggal' => $listTanggal,
            'listSangatPuas' => $listSangatPuas,
            'listPuas' => $listPuas,
            'listTidakPuas' => $listTidakPuas,
        ]);
    }
}