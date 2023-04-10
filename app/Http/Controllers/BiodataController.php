<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Kelamin;
use App\Models\Layanan;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Usia;
use App\Models\Village;
use Carbon\Carbon;
use Laravel\Ui\Presets\React;

class BiodataController extends Controller
{
    public function index()
    {
        if (session()->has('biodataID')) {
            return redirect('/menu');
        } else {
            $provinces = Province::all();
            $usias = Usia::all();
            $agamas = Agama::all();
            $kelamins = Kelamin::all();
            $layanans = Layanan::all();
            $pekerjaans = Pekerjaan::all();
            $pendidikans = Pendidikan::all();
            $getDate = Carbon::now();
            return view('ikm.biodata', compact(
                'provinces',
                'usias',
                'agamas',
                'kelamins',
                'layanans',
                'pekerjaans',
                'pendidikans',
                'getDate',
            ));
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'hp' => 'required',
            'kelamin_id' => 'required',
            'agama_id' => 'required',
            'usia_id' => 'required',
            'alamat' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'layanan_id' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        // dd('registrasi berhasil !!');
        // $validatedData['provinsi'] = Province::where('id', '=', $validatedData['provinsi'])->first()->name;
        // $validatedData['kabupaten'] = Regency::where('id', '=', $validatedData['kabupaten'])->first()->name;
        // $validatedData['kecamatan'] = District::where('id', '=', $validatedData['kecamatan'])->first()->name;
        // $validatedData['desa'] = Village::where('id', '=', $validatedData['desa'])->first()->name;
        $biodataID = Biodata::insertGetId($validatedData);

        session()->put('biodataID', $biodataID);
        session()->put('ikmStatus', '0');
        // $data = $request->input();

        return redirect('/menu');
    }

    // public function respondenSession(Request $request)
    // {
    //     $data = $request->input();
    //     $request->session()->put('nik', $data['nik']);
    //     // echo session('nik');
    //     return redirect('/menu');
    // }

    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }

    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }

    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id'>$desa->name</option>";
        }
    }
}
