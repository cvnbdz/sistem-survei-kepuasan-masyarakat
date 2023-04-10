<?php

namespace App\Http\Controllers;

use App\Models\Kepuasan;
use Illuminate\Http\Request;

class KepuasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->missing('biodataID')) {
            return redirect('/biodata');
        } else {
            $getBiodataID = request()->session()->get('biodataID');
            return view('kepuasan', compact('getBiodataID'));
        }
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
        $validatedData = $request->validate([
            'kepuasan' => 'required'
        ]);

        dd($validatedData);
        // Kepuasan::create($validatedData);

        // return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kepuasan  $kepuasan
     * @return \Illuminate\Http\Response
     */
    public function show(Kepuasan $kepuasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kepuasan  $kepuasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kepuasan $kepuasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kepuasan  $kepuasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kepuasan $kepuasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kepuasan  $kepuasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kepuasan $kepuasan)
    {
        //
    }
}
