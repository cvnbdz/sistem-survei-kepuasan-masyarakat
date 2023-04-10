<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Biodata;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use App\Models\OpsiJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SurveyController extends Controller
{
    public function index()
    {
        if (session()->missing('biodataID')) {
            return redirect('/biodata');
        } else {
            $getBiodataID = request()->session()->get('biodataID');
            $pertanyaans = Pertanyaan::with('opsi_jawaban')->get();
            dd($pertanyaans);
            $kategori = Kategori::get();
            $kuisioner = Kategori::get();
            // $pertanyaans = Pertanyaan::with('opsi_jawaban')->paginate(1);0

            return view('survey', compact('pertanyaans', 'getBiodataID'));
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'response.*.biodata_id' => 'required',
            'response.*.opsi_jawaban_id' => 'required',
            'response.*.pertanyaan_id' => 'required',
        ]);

        foreach ($validatedData as $key => $value) {
            Survey::insert($value);
        }

        $getBiodataID = request()->session()->get('biodataID');
        $respons = Survey::where('biodata_id', $getBiodataID)->get();

        $created_at = Carbon::now();
        $updated_at = Carbon::now();

        $jmlNilai = 0;
        foreach ($respons as $respon) {
            $nilai = $respon->opsi_jawaban->value;
            $nilai = $nilai * 25;
            $jmlNilai = $jmlNilai + $nilai;

            DB::table('surveys')
                ->where('biodata_id', $getBiodataID)
                ->where('opsi_jawaban_id', $respon->opsi_jawaban_id)
                ->update([
                    'nilai' => $nilai,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ]);
        }

        $jmlSoal = Pertanyaan::with('opsi_jawaban')->count();
        $this_nilai = $jmlNilai / $jmlSoal;

        Biodata::where('id', $getBiodataID)->update(['nilai' => $this_nilai]);

        session()->pull('ikmStatus');
        session()->put('ikmStatus', '2');

        return redirect('/menu');
    }
}
