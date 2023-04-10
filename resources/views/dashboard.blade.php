@extends('layouts.main')

@section('body')
    <div class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <img src="assets/img/satlantas.png" height="200px" class="rounded float-left" alt="Satuan">
            <img src="assets/img/polres.png" height="200px" class="rounded float-right" alt="Polres">
            <h1 class=" text-white">IKM
            </h1>

            <h2 class="mt-1 text-white">SATLANTAS POLRES KARANGANYAR</h2>
            <h3 class="mb-5 text-white">
                <em>Indeks Kepuasan Masyarakat <br>Satuan Lalu Lintas <br>Polres Karanganyar</em>
            </h3>

            <button data-toggle="modal" data-target="#modalResponden" class="btn btn-primary btn-xl  js-scroll-trigger">
                <i class="fa fa-paper-plane"></i>&nbsp;ISI IKM SATLANTAS</button>
        </div>
    </div>
@endsection
