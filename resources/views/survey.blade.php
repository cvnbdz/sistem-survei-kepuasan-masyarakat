<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Selamat Datang di Satlantas Karanganyar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/jqbtk.min.css') !!}"> --}}
    <link rel="stylesheet" href="{!! asset('css/jqbtk.min.css') !!}">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/custom-styles.css" rel="stylesheet" />
</head>

<body>
    <table align="center" cellpadding="0" cellspacing="0" class="kop" border="0">
        <tbody>
            <tr>
                <td align="center">
                    <img src="assets/img/logo_polri.png" border="0" class="logo_kop">
                </td>
                <td align="center">
                    <font class="kop1"><strong>SATLANTAS POLRES KARANGANYAR</strong></font><br>
                    <font class="kop2">Jl. A. Yani No.1, Ngarus, Kec. Karanganyar, Kabupaten Karanganyar<br>
                        Jawa Tengah Kodepos 59112</font>
                </td>
                <td align="center">
                    <a><img src="assets/img/logo_polda_jateng.png" border="0" class="logo_kop"></a>
                </td>
            </tr>
        </tbody>
    </table>
    <nav>
        <div class="container">
            <div class="line1">
                <p class="mt-1 text-white">
                    <center> SILAHKAN MENGISI SURVEY KEPUASAN MASYARAKAT DIBAWAH INI</center>
                </p>
            </div>
        </div>
    </nav>
    <form action="/survey" method="POST">
        @csrf
        @foreach ($pertanyaans as $key => $pertanyaan)
            @if ($pertanyaan->kategori->kuisioner->is_active == 1)
                <div class="card mt-4">
                    <div class="card-header">
                        {{ $pertanyaan->pertanyaan }}
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($pertanyaan->opsi_jawaban as $opsi)
                                <li class="list-group-item">
                                    <input type="radio" name="response[{{ $key }}][opsi_jawaban_id]"
                                        id="" class="mr-2" value="{{ $opsi->id }}">
                                    {{ $opsi->opsi_jawaban }}

                                    <input type="hidden" name="response[{{ $key }}][pertanyaan_id]"
                                        id="" class="mr-2" value="{{ $pertanyaan->id }}">

                                    <input type="hidden" name="response[{{ $key }}][biodata_id]"
                                        id="" class="mr-2" value="{{ $getBiodataID }}">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        @endforeach
        <br>
        {{-- @if ($pertanyaans->onFirstPage())
            <a style="display: none" class="btn btn-success ml-3"
                href="{{ $pertanyaans->previousPageUrl() }}">Previous</a>
        @else
            <a class="btn btn-success ml-3" href="{{ $pertanyaans->previousPageUrl() }}">Previous</a>
        @endif
        @if ($pertanyaans->onLastPage())
            <button class="btn btn-success ml-3" type="submit">Submit</button>
        @else
            <a class="btn btn-success ml-3" href="{{ $pertanyaans->nextPageUrl() }}">Next</a>
            <button class="btn btn-success ml-3" type="submit">Next</button>
        @endif --}}
        <button class="btn btn-success ml-3" type="submit">Submit</button>
    </form>
</body>

</html>
