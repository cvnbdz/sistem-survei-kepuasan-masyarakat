<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Polling;
use App\Models\Village;

// Get semua data


class LandingController extends Controller
{
    public function index()
    {
        $numSangatPuas = Polling::where('nilai', '=', '5')->count();
        $numPuas = Polling::where('nilai', '=', '4')->count();
        $numTidakPuas = Polling::where('nilai', '=', '2')->count();
        // dd($numSangatPuas);
        return view('layouts.main', compact('numSangatPuas', 'numPuas', 'numTidakPuas'));
    }
}
