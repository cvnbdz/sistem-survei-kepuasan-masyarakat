<?php

namespace App\Http\Controllers;

// use Carbon\Carbon;
use App\Models\Survey;
// use App\Models\Kategori;
// use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DataSurveyController extends Controller
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
    public function index()
    {
        $pertanyaans = \App\Models\Pertanyaan::with('opsi_jawaban')->get();
        $kategori = \App\Models\Kategori::get();
        $kuisioner = \App\Models\Kategori::get();
        $start_date = \Carbon\Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = \Carbon\Carbon::parse(request()->end_date)->toDateTimeString();
        return view('admin.survey.datasurvey', [
            'pertanyaans' => $pertanyaans,
            'kategori' => $kategori,
            'kuisioner' => $kuisioner,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);
    }
}
