<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{!! asset('fonts/icomoon/style.css') !!}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">

    <!-- Style -->
    <link rel="stylesheet" href="{!! asset('css/ikm/style.css') !!}">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/jqbtk.min.css') !!}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet">

    <title>Biodata</title>
</head>

<body>


    <div class="content">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">


                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <h3 class="heading mb-4">SELAMAT DATANG</h3>
                            <p>DI survey Kepuasan Masyarakat Satlantas Karanganyar
                                <br>Silahkan Mengisi Identitas diri
                            </p>

                            <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


                        </div>
                        <div class="col-md-6">

                            <form class="mb-5" method="post" action="/biodata" id="" name=""
                                autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="tel" class="form-control" name="nik" id="nik"
                                            placeholder="No. KTP">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="tel" class="form-control" name="hp" id="hp"
                                            placeholder="Nomor HP">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="kelamin_id" name="kelamin_id">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            @foreach ($kelamins as $kelamin)
                                                <option value="{{ $kelamin->id }}">{{ $kelamin->kelamin }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="agama_id" name="agama_id">
                                            <option selected>Pilih Agama</option>
                                            @foreach ($agamas as $agama)
                                                <option value="{{ $agama->id }}">{{ $agama->agama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="usia_id" name="usia_id">
                                            <option selected>Pilih Rentang Usia</option>
                                            @foreach ($usias as $usia)
                                                <option value="{{ $usia->id }}">{{ $usia->usia }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 input-group">
                                        <div class="mb-3">
                                            <select class="form-control" name="province_id" id="province_id"
                                                required="">
                                                <option selected>Pilih Provinsi</option>
                                                @foreach ($provinces as $provinsi)
                                                    <option value="{{ $provinsi->id }}">
                                                        {{ $provinsi->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        &nbsp;
                                        <div class="mb-3">
                                            <select class="form-control" name="regency_id" id="regency_id"
                                                required="" style="">
                                                <option selected>Pilih Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 input-group">
                                        <div class="mb-3">
                                            <select class="form-control" name="district_id" id="district_id"
                                                required="" style="">
                                                <option selected>Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                        &nbsp;
                                        <div class="mb-3">
                                            <select class="form-control" name="village_id" id="village_id"
                                                required="" style="">
                                                <option selected>Pilih Desa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="pendidikan_id" name="pendidikan_id">
                                            <option selected>Pilih Jenjang Pendidikan</option>
                                            @foreach ($pendidikans as $pendidikan)
                                                <option value="{{ $pendidikan->id }}">
                                                    {{ $pendidikan->pendidikan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="pekerjaan_id" name="pekerjaan_id">
                                            <option selected>Pilih Jenis Pekerjaan</option>
                                            @foreach ($pekerjaans as $pekerjaan)
                                                <option value="{{ $pekerjaan->id }}">{{ $pekerjaan->pekerjaan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="layanan_id" name="layanan_id">
                                            <option selected>Pilih Jenis Layanan</option>
                                            @foreach ($layanans as $layanan)
                                                <option value="{{ $layanan->id }}">{{ $layanan->layanan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="created_at" id="created_at"
                                    value="{{ $getDate }}">
                                <input type="hidden" class="form-control" name="updated_at" id="updated_at"
                                    value="{{ $getDate }}">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="justify-content-end">
                                            <a type="Reset" value="Reset" href="/"
                                                class="btn btn-primary">BACK
                                            </a>
                                            <input type="submit" value="SUBMIT" href="/menu"
                                                class="btn btn-primary rounded-0 py-2 px-4">
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Your message was sent, thank you!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.validate.min.js') !!}"></script>
    <script src="{!! asset('js/main.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{!! asset('js/jquery.min.js') !!}"></script> --}}
    {{-- <script src="{!! asset('js/bootstrap.min.js') !!}"></script> --}}
    <script src="{!! asset('js/jqbtk.js') !!}"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
                $('#province_id').on('change', function() {
                    let id_provinsi = $('#province_id').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkabupaten') }}",
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#regency_id').html(msg);
                        },
                        error: function(data) {
                            console.log('error:', data)
                        },
                    })
                })

                $('#regency_id').on('change', function() {
                    let id_kabupaten = $('#regency_id').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkecamatan') }}",
                        data: {
                            id_kabupaten: id_kabupaten
                        },
                        cache: false,

                        success: function(msg) {
                            $('#district_id').html(msg);
                        },
                        error: function(data) {
                            console.log('error:', data)
                        },
                    })
                })

                $('#district_id').on('change', function() {
                    let id_kecamatan = $('#district_id').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getdesa') }}",
                        data: {
                            id_kecamatan: id_kecamatan
                        },
                        cache: false,

                        success: function(msg) {
                            $('#village_id').html(msg);
                        },
                        error: function(data) {
                            console.log('error:', data)
                        },
                    })
                })
            })
        });
    </script>
    <script>
        $(function() {
            $('#nik').keyboard({
                type: 'numpad'
            });
            $('#nama').keyboard({
                initCaps: true
            });
            $('#hp').keyboard({
                type: 'numpad'
            });
            $('#alamat').keyboard({
                initCaps: true
            });
        });
    </script>

</body>

</html>
