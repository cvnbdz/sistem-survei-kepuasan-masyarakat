<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\OpsiJawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{

    public function index()
    {
        return view('admin.survey.pertanyaan', [
            "pertanyaans" => Pertanyaan::get(),
            "opsi_jawabans" => OpsiJawaban::get(),
            "kategoris" => Kategori::get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'kategori_id' => 'required'
        ]);

        Pertanyaan::create($validatedData);

        return redirect('/panel/dashboard/pertanyaan');
    }

    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        $rules['pertanyaan'] = 'required';
        $rules['kategori_id'] = 'required';

        if ($request->kategori_id != $pertanyaan->kategori_id || $request->pertanyaan != $pertanyaan->pertanyaan) {
        }
        $validatedData = $request->validate($rules);

        Pertanyaan::where('id', $pertanyaan->id)->update($validatedData);

        return redirect('/panel/dashboard/pertanyaan');
    }


    public function destroy(Pertanyaan $pertanyaan)
    {
        Pertanyaan::where('id', $pertanyaan->id)->delete();

        return redirect('/panel/dashboard/pertanyaan');
    }
}
