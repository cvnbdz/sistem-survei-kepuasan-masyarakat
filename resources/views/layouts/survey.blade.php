<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>IKM : Polres Karanganyar</title>
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
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/custom-styles.css" rel="stylesheet" />
</head>

<body>              
        {{-- Pertanyaan Pertama --}}
            <div class="modal fade custom-modal" id="survey1" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                        </div>
                        <div class="modal-body survey-modal-body custom-modal">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="soal_1" style="display: block;">
                                            <div class="form-group row">
                                                <div class="col-sm-12 radioicon">
                                                    <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                                    <div class="d-flex justify-content-center align-items-center my-5">
                                                        <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">2</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">3</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">4</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">5</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">6</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">7</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                        <div class="strip"></div>
                                                        <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                                    </div>
                                                    <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana kesesuaian mengenai persyaratan pelayanan dengan jenis pelayanan yang diberikan </h4> <br>
                                                        <div class="d-flex justify-content-center">
                                                            <label>
                                                                <input class="form-check-input" type="radio" name="jawab-1" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                                <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                            </label>
                                                            <label>
                                                                <input class="form-check-input" type="radio" name="jawab-1" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                                <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                            </label>
                                                            <label>
                                                                <input class="form-check-input" type="radio" name="jawab-1" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                                <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                            </label>
                                                            <label>
                                                                <input class="form-check-input" type="radio" name="jawab-1" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                                <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                            </label>
                                                            <label>
                                                                <input class="form-check-input" type="radio" name="jawab-1" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                                <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                            </label>
                                                            <label>
                                                                <input class="form-check-input" type="radio" name="jawab-1" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                                <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                            </label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4" align="left">
                                        <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                        <!-- <a data-bs-target="#survey1" data-bs-toggle="modal"> 
                                            <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-primary btn-block btn-lg" id="tombol_soal_back_2" value="Sebelumnya"></div>
                                        </a> -->
                                    </div>
                                    <div class="col-md-4" align="center"></div>
                                    <div class="col-md-4" align="right">
                                        <div id="soal_next_1" style="display: block;">
                                        <a data-bs-target="#survey2" data-bs-toggle="modal">   
                                            <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                        </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- Pertanyaan Kedua  --}}
            <div class="modal fade custom-modal" id="survey2" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                    </div>
                    <div class="modal-body survey-modal-body custom-modal">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="soal_1" style="display: block;">
                                        <div class="form-group row">
                                            <div class="col-sm-12 radioicon">
                                                <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                                <div class="d-flex justify-content-center align-items-center my-5">
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">3</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">4</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">5</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">6</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">7</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                                </div>
                                                <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana mengenai kemudahan prosedur pelayanan yang diberikan</h4> <br>
                                                    <div class="d-flex justify-content-center">
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                            <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                            <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                            <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                            <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                            <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                            <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4" align="left">
                                    <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                    <a data-bs-target="#survey1" data-bs-toggle="modal"> 
                                        <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                    </a>
                                </div>
                                <div class="col-md-4" align="center"></div>
                                <div class="col-md-4" align="right">
                                    <div id="soal_next_1" style="display: block;">
                                    <a data-bs-target="#survey3" data-bs-toggle="modal">   
                                        <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                    </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         {{-- Pertanyaan Ketiga  --}}
            <div class="modal fade custom-modal" id="survey3" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                    </div>
                    <div class="modal-body survey-modal-body custom-modal">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="soal_1" style="display: block;">
                                        <div class="form-group row">
                                            <div class="col-sm-12 radioicon">
                                                <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                                <div class="d-flex justify-content-center align-items-center my-5">
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">4</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">5</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">6</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">7</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                                </div>
                                                <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana kecepatan waktu dalam memberikan pelayanan</h4> <br>
                                                    <div class="d-flex justify-content-center">
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                            <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                            <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                            <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                            <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                            <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                            <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4" align="left">
                                    <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                    <a data-bs-target="#survey2" data-bs-toggle="modal"> 
                                        <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                    </a>
                                </div>
                                <div class="col-md-4" align="center"></div>
                                <div class="col-md-4" align="right">
                                    <div id="soal_next_1" style="display: block;">
                                    <a data-bs-target="#survey4" data-bs-toggle="modal">   
                                        <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                    </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Pertanyaan Keempat  --}}
            <div class="modal fade custom-modal" id="survey4" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                    </div>
                    <div class="modal-body survey-modal-body custom-modal">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="soal_1" style="display: block;">
                                        <div class="form-group row">
                                            <div class="col-sm-12 radioicon">
                                                <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                                <div class="d-flex justify-content-center align-items-center my-5">
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">4</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">5</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">6</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">7</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                    <div class="strip"></div>
                                                    <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                                </div>
                                                <h4 class="form-subtitle m-0 p-0 text-center">Apakah biaya / tarif dalam pelayanan sesuai</h4> <br>
                                                    <div class="d-flex justify-content-center">
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                            <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                            <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                            <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                            <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                            <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                        </label>
                                                        <label>
                                                            <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                            <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                        </label>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4" align="left">
                                    <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                    <a data-bs-target="#survey3" data-bs-toggle="modal"> 
                                        <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                    </a>
                                </div>
                                <div class="col-md-4" align="center"></div>
                                <div class="col-md-4" align="right">
                                    <div id="soal_next_1" style="display: block;">
                                    <a data-bs-target="#survey5" data-bs-toggle="modal">   
                                        <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                    </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        {{-- Pertanyaan Kelima  --}}
        <div class="modal fade custom-modal" id="survey5" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                </div>
                <div class="modal-body survey-modal-body custom-modal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="soal_1" style="display: block;">
                                    <div class="form-group row">
                                        <div class="col-sm-12 radioicon">
                                            <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                            <div class="d-flex justify-content-center align-items-center my-5">
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">4</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">5</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">6</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">7</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                            </div>
                                            <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana kesesuaian produk pelayanan yang tercantum dengan hasil yang diberikan</h4> <br>
                                                <div class="d-flex justify-content-center">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                        <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                        <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                        <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                        <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                        <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                        <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" align="left">
                                <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                <a data-bs-target="#survey4" data-bs-toggle="modal"> 
                                    <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                </a>
                            </div>
                            <div class="col-md-4" align="center"></div>
                            <div class="col-md-4" align="right">
                                <div id="soal_next_1" style="display: block;">
                                <a data-bs-target="#survey6" data-bs-toggle="modal">   
                                    <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        {{-- Pertanyaan Ke6  --}}
        <div class="modal fade custom-modal" id="survey6" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                </div>
                <div class="modal-body survey-modal-body custom-modal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="soal_1" style="display: block;">
                                    <div class="form-group row">
                                        <div class="col-sm-12 radioicon">
                                            <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                            <div class="d-flex justify-content-center align-items-center my-5">
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">4</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">5</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">6</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">7</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                            </div>
                                            <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana kompetensi / kemampuan petugas dalam pelayanan </h4> <br>
                                                <div class="d-flex justify-content-center">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                        <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                        <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                        <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                        <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                        <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                        <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" align="left">
                                <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                <a data-bs-target="#survey5" data-bs-toggle="modal"> 
                                    <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                </a>
                            </div>
                            <div class="col-md-4" align="center"></div>
                            <div class="col-md-4" align="right">
                                <div id="soal_next_1" style="display: block;">
                                <a data-bs-target="#survey7" data-bs-toggle="modal">   
                                    <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- Pertanyaan Ke7  --}}
        <div class="modal fade custom-modal" id="survey7" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                </div>
                <div class="modal-body survey-modal-body custom-modal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="soal_1" style="display: block;">
                                    <div class="form-group row">
                                        <div class="col-sm-12 radioicon">
                                            <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                            <div class="d-flex justify-content-center align-items-center my-5">
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">4</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">5</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">6</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">7</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">8</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                            </div>
                                            <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana perilaku petugas dalam pelayanan terkait kesopanan dan keramahan</h4> <br>
                                                <div class="d-flex justify-content-center">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                        <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                        <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                        <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                        <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                        <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                        <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" align="left">
                                <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                <a data-bs-target="#survey6" data-bs-toggle="modal"> 
                                    <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                </a>
                            </div>
                            <div class="col-md-4" align="center"></div>
                            <div class="col-md-4" align="right">
                                <div id="soal_next_1" style="display: block;">
                                <a data-bs-target="#survey8" data-bs-toggle="modal">   
                                    <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- Pertanyaan Ke8  --}}
        <div class="modal fade custom-modal" id="survey8" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                </div>
                <div class="modal-body survey-modal-body custom-modal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="soal_1" style="display: block;">
                                    <div class="form-group row">
                                        <div class="col-sm-12 radioicon">
                                            <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                            <div class="d-flex justify-content-center align-items-center my-5">
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">4</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">5</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">6</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">7</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">8</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step d-flex justify-content-center align-items-center">9</div>
                                            </div>
                                            <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana kualitas sarana dan prasarana</h4> <br>
                                                <div class="d-flex justify-content-center">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                        <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                        <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                        <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                        <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                        <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                        <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" align="left">
                                <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                <a data-bs-target="#survey7" data-bs-toggle="modal"> 
                                    <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                </a>
                            </div>
                            <div class="col-md-4" align="center"></div>
                            <div class="col-md-4" align="right">
                                <div id="soal_next_1" style="display: block;">
                                <a data-bs-target="#survey9" data-bs-toggle="modal">   
                                    <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        {{-- Pertanyaan Ke9  --}}
        <div class="modal fade custom-modal" id="survey9" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title custom-modal-title" id="exampleModalToggleLabel2">Silahkan Jawab Pertanyaan Dibawah Ini</h5>
                </div>
                <div class="modal-body survey-modal-body custom-modal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="soal_1" style="display: block;">
                                    <div class="form-group row">
                                        <div class="col-sm-12 radioicon">
                                            <h4 class="form-subtitle m-0 p-0 text-center">A. KUALITAS PELAYANAN</h4> <br>
                                            <div class="d-flex justify-content-center align-items-center my-5">
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">1</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">2</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">3</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">4</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">5</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">6</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">7</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">8</div>
                                                <div class="strip"></div>
                                                <div class="rounded-circle step step-active d-flex justify-content-center align-items-center">9</div>
                                            </div>
                                            <h4 class="form-subtitle m-0 p-0 text-center">Bagaimana penanganan pengaduan pengguna layanan</h4> <br>
                                                <div class="d-flex justify-content-center">
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5" value="69c4e8f9-f7z9-54ez-8363-b39f9d8e8be5_0">
                                                        <img src="assets/img/emot_8.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_77bez564-z94e-5cz3-z92b-28c99cdc9bfz" value="77bez564-z94e-5cz3-z92b-28c99cdc9bfz_1">
                                                        <img src="assets/img/emot_7.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_5f3c33e3-c43c-5995-98fz-978767b5b4zf" value="5f3c33e3-c43c-5995-98fz-978767b5b4zf_2">
                                                        <img src="assets/img/emot_5.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ccc787ef-925e-579b-z24c-3d236337743e" value="ccc787ef-925e-579b-z24c-3d236337743e_3">
                                                        <img src="assets/img/emot_3.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493" value="ze8c6d3c-4398-5ebb-8d66-e9c33e9z9493_4">
                                                        <img src="assets/img/emot_2.png" style="padding: 10px;">
                                                    </label>
                                                    <label>
                                                        <input class="form-check-input" type="radio" name="jawab-2" id="jawab_37e43538-8z63-5c5b-b939-963z43b26z5b" value="37e43538-8z63-5c5b-b939-963z43b26z5b_5">
                                                        <img src="assets/img/emot_1.png" style="padding: 10px;">
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" align="left">
                                <!-- !!! TEMPLATE KALAU ADA TOMBOL BACK !!! -->
                                <a data-bs-target="#survey8" data-bs-toggle="modal"> 
                                    <div id="soal_back_2" style="display: block;"><input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_back_2" value="SEBELUMNYA"></div>
                                </a>
                            </div>
                            <div class="col-md-4" align="center"></div>
                            <div class="col-md-4" align="right">
                                <div id="soal_next_1" style="display: block;">
                                <a href="/menu">   
                                    <input type="button" class="btn btn-survey btn-block btn-lg" id="tombol_soal_next_1" value="SELANJUTNYA">
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        $(function() {
             $(survey1).modal("show");
        });
    </script>
</body>

</html>
