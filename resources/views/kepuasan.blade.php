<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="css/custom-styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet">
    <title>IKM : Polres Karanganyar</title>
</head>

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
<br>

<body class="kepuasan-body">
    <p class="intro">
        Puaskah Anda Dengan Pelayanan di Kantor Kami? <br>
        <font class="intro2"> Pilih Dengan Menekan Salah Satu Tombol Dibawah Ini</font>
        <br>
    </p>
    <form action="/kepuasan/polling" method="POST">
        @csrf
        <input type="hidden" name="biodata_id" id="" class="mr-2" value="{{ $getBiodataID }}">
        <table align="center" class="tabel_opsi">
            <tbody>
                <tr>
                    <td>
                        {{-- <input type="number" src="assets/img/icon_t_1.png" name="kepuasan" value="1"
                            onclick="openNav_5()" class="img_emoticon" id="nilai_5"> --}}
                        {{-- <img onclick="openNav_5()" src="assets/img/icon_t_1.png" class="img_emoticon" id="nilai_5"> --}}
                        <button name="nilai" type="submit"
                            style="background: url(assets/img/icon_t_1.png); width: 150px; height: 150px; border: none;"
                            value="5"></button>
                    </td>
                    <td>
                        {{-- <input type="image" src="assets/img/icon_t_2.png" name="kepuasan" value="2" alt="Submit"
                            onclick="openNav_4()" class="img_emoticon" id="nilai_4"> --}}
                        {{-- <img onclick="openNav_4()" src="assets/img/icon_t_2.png" class="img_emoticon" id="nilai_4"> --}}
                        <button name="nilai" type="submit"
                            style="background: url(assets/img/icon_t_2.png); width: 150px; height: 150px; border: none;"
                            value="4"></button>
                    </td>
                    <td>
                        {{-- <input type="image" src="assets/img/icon_t_3.png" name="kepuasan" value="3" alt="Submit"
                            onclick="openNav_2()" class="img_emoticon" id="nilai_2"> --}}
                        {{-- <img onclick="openNav_2()" src="assets/img/icon_t_3.png" class="img_emoticon" id="nilai_2"> --}}
                        <button name="nilai" type="submit"
                            style="background: url(assets/img/icon_t_3.png); width: 150px; height: 150px; border: none;"
                            value="2"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    {{-- <table align="center" class="tabel_opsi">
        <tr>
            <td>
                <img src="assets/img/icon_t_1.png" class="img_emoticon" id="nilai_5">
            </td>
            <td>
                <img src="assets/img/icon_t_2.png" class="img_emoticon" id="nilai_4">
            </td>
            <td>
                <img src="assets/img/icon_t_3.png" class="img_emoticon" id="nilai_2">
            </td>
        </tr>
    </table> --}}
    <p class="kop2" align="center" style="margin-top:30px;">
        <font class="intro"><strong><span id="jam"></span>:<span id="menit"></span>:<span
                    id="detik"></span></strong></font><br>
        <span id="tanggal"></span>
    </p>
    <!-- SANGAT PUAS -->
    <div id="myNav_5" class="overlay">
        <div class="overlay-content">
            <p align="center">
                <img src="assets/img/icon_tt_1.png" class="img_emoticon">
            </p>
            <p align="center">
                <font color="yellow">TERIMA KASIH...!!!</font>
            </p>
            <p align="center">Anda Telah Membantu Kami<br>Untuk Melayani Lebih Baik Lagi.</p>
        </div>
    </div>
    <!-- PUAS -->
    <div id="myNav_4" class="overlay">
        <div class="overlay-content">
            <p align="center">
                <img src="assets/img/icon_tt_2.png" class="img_emoticon">
            </p>
            <p align="center">
                <font color="yellow">TERIMA KASIH...!!!</font>
            </p>
            <p align="center">Anda Telah Membantu Kami<br>Untuk Melayani Lebih Baik Lagi.</p>
        </div>
    </div>
    <!-- TIDAK PUAS -->
    <div id="myNav_2" class="overlay">
        <div class="overlay-content">
            <p align="center">
                <img src="assets/img/icon_tt_3.png" class="img_emoticon">
            </p>
            <p align="center">
                <font color="yellow">TERIMA KASIH...!!!</font>
            </p>
            <p align="center">Anda Telah Membantu Kami<br>Untuk Melayani Lebih Baik Lagi.</p>
        </div>
    </div>

    <audio id="audio" src="assets/audio/terima_kasih.mp3"></audio>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
                $("#nilai_5").click(function() {
                    $.ajax({
                        type: "POST",
                        url: "/kepuasan/polling",
                        data: {
                            kepuasan: 5
                        },
                        success: function(msg) {
                            if (msg == 1) openNav_5();
                            else alert('Gagal menyimpan pilihan');
                            setTimeout("location.href = '/menu';", 3000);
                        }
                    });
                });
            })
        });
        //-- SOUND
        function play() {
            var audio = document.getElementById("audio");
            audio.play();
        }

        function EvalSound(soundobj) {
            var thissound = document.getElementById(soundobj);
            thissound.Play();
        }

        //-- JAM
        window.setTimeout("waktu()", 1000);

        function tanggal() {
            var date = new Date();
            var tahun = date.getFullYear();
            var bulan = date.getMonth();
            var tanggal = date.getDate();
            var hari = date.getDay();

            switch (hari) {
                case 0:
                    hari = "Minggu";
                    break;
                case 1:
                    hari = "Senin";
                    break;
                case 2:
                    hari = "Selasa";
                    break;
                case 3:
                    hari = "Rabu";
                    break;
                case 4:
                    hari = "Kamis";
                    break;
                case 5:
                    hari = "Jum'at";
                    break;
                case 6:
                    hari = "Sabtu";
                    break;
            }

            switch (bulan) {
                case 0:
                    bulan = "Januari";
                    break;
                case 1:
                    bulan = "Februari";
                    break;
                case 2:
                    bulan = "Maret";
                    break;
                case 3:
                    bulan = "April";
                    break;
                case 4:
                    bulan = "Mei";
                    break;
                case 5:
                    bulan = "Juni";
                    break;
                case 6:
                    bulan = "Juli";
                    break;
                case 7:
                    bulan = "Agustus";
                    break;
                case 8:
                    bulan = "September";
                    break;
                case 9:
                    bulan = "Oktober";
                    break;
                case 10:
                    bulan = "November";
                    break;
                case 11:
                    bulan = "Desember";
                    break;
            }

            var tampilTanggal = hari + ", " + tanggal + " " + bulan + " " + tahun;
            document.getElementById("tanggal").innerHTML = tampilTanggal;
        }

        tanggal();

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            var jam = waktu.getHours();
            if (jam < 10) jam = "0" + jam;
            var menit = waktu.getMinutes();
            if (menit < 10) menit = "0" + menit;
            var detik = waktu.getSeconds();
            if (detik < 10) detik = "0" + detik;
            document.getElementById("jam").innerHTML = jam;
            document.getElementById("menit").innerHTML = menit;
            document.getElementById("detik").innerHTML = detik;
        }

        //-- SANGAT PUAS
        function openNav_5() {
            document.getElementById("myNav_5").style.height = "100%";
            play();
            setTimeout(closeNav_5, 1500);
        }

        function closeNav_5() {
            document.getElementById("myNav_5").style.height = "0%";
            localStorage.setItem('openModal', '#message539');
            window.location.href = "/menu";

        }
        //-- PUAS
        function openNav_4() {
            document.getElementById("myNav_4").style.height = "100%";
            play();
            setTimeout(closeNav_4, 1500);
        }

        function closeNav_4() {
            document.getElementById("myNav_4").style.height = "0%";
            localStorage.setItem('openModal', '#message539');
            window.location.href = "/menu";
        }
        //-- TIDAK PUAS
        function openNav_2() {
            document.getElementById("myNav_2").style.height = "100%";
            play();
            setTimeout(closeNav_2, 1500);
        }

        function closeNav_2() {
            document.getElementById("myNav_2").style.height = "0%";
            localStorage.setItem('openModal', '#message539');
            window.location.href = "/menu";
        }
    </script>
</body>

</html>
