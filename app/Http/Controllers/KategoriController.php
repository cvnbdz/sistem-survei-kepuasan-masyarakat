<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kuisioner;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.survey.kategori', [
            "kategori" => Kategori::get(),
            "kuisioners" => Kuisioner::get(),
        ]);
        // $kategori = Kategori::get();
        // return view('admin.survey.kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kuisioner_id' => 'required',
            'kategori' => 'required',
            'is_active' => 'required',
        ]);

        Kategori::create($validatedData);

        return redirect('/panel/dashboard/kategori');

        // if ($insert) {
        //     return redirect('/data-barang')->with('success', 'Data Barang telah ditambahkan !');
        // } else {
        //     return redirect('/data-barang')->with('fail', 'Data Barang gagal ditambahkan !');
        // }
    }

    public function edit(Kategori $kategori)
    {
        return view('admin.survey.kategori', [
            'kategori' => $kategori,
        ]);
    }


    public function update(Request $request, Kategori $kategori)
    {
        $validatedData = $request->validate([
            'kuisioner_id' => 'required',
            'kategori' => 'required',
            'is_active' => 'required',
        ]);

        Kategori::where('id', $kategori->id)->update($validatedData);

        return redirect('/panel/dashboard/kategori');
    }


    public function destroy(Kategori $kategori)
    {
        Kategori::where('id', $kategori->id)->delete();

        return redirect('/panel/dashboard/kategori');
    }
}
