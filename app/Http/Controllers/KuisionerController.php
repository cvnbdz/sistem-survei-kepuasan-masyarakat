<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kuisioner;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    public function index()
    {
        $kuisioner = Kuisioner::all();
        return view('admin.survey.kuisioner', compact('kuisioner'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kuisioner' => 'required',
            'is_active' => 'required',
        ]);

        Kuisioner::create($validatedData);

        return redirect('/panel/dashboard/kuisioner');

        // if ($insert) {
        //     return redirect('/data-barang')->with('success', 'Data Barang telah ditambahkan !');
        // } else {
        //     return redirect('/data-barang')->with('fail', 'Data Barang gagal ditambahkan !');
        // }
    }

    // public function edit(Kuisioner $kuisioner)
    // {
    //     return view('admin.survey.kuisioner', [
    //         'kuisioner' => $kuisioner,
    //     ]);
    // }


    public function update(Request $request, Kuisioner $kuisioner)
    {
        $validatedData = $request->validate([
            'kuisioner' => 'required',
            'is_active' => 'required',
        ]);

        Kuisioner::where('id', $kuisioner->id)->update($validatedData);

        return redirect('/panel/dashboard/kuisioner');
    }


    public function destroy(Kuisioner $kuisioner)
    {
        Kuisioner::where('id', $kuisioner->id)->delete();

        return redirect('/panel/dashboard/kuisioner');
    }
}