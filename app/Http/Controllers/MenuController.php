<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function kepuasan()
    {
        return view('kepuasan');
    }

    public function saran()
    {
        return view('saran');
    }

}
