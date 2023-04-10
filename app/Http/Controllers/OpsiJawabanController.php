<?php

namespace App\Http\Controllers;

use App\Models\OpsiJawaban;
use Illuminate\Http\Request;

class OpsiJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedOpsi = $request->validate([
            'pertanyaan_id' => 'required',
            'opsi_jawaban' => 'required',
            'value' => 'required'
        ]);

        OpsiJawaban::create($validatedOpsi);

        return redirect('/panel/dashboard/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpsiJawaban $opsi)
    {
        $validatedData = $request->validate([
            'pertanyaan_id' => 'required',
            'opsi_jawaban' => 'required',
            'value' => 'required'
        ]);

        OpsiJawaban::where('id', $opsi->id)->update($validatedData);

        return redirect('/panel/dashboard/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpsiJawaban $opsi)
    {
        OpsiJawaban::where('id', $opsi->id)->delete();

        return redirect('/panel/dashboard/pertanyaan');
    }
}
