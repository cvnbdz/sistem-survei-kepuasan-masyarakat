<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/menu.css" rel="stylesheet" />

    <title>Menu Polres Karanganyar</title>
</head>

<body>
    <div>
        <header>
            <div class="sat">
                <img src="assets/img/satlantas.png" class="rounded float-left">
            </div>
            <h3>
                <center> SATLANTAS <br> POLRES KARANGANYAR </center>
                </h2>
                <div class="sat2">
                    <img src="assets/img/polres.png" class="rounded float-right">
                </div>


        </header>
        <nav>
            <div class="container">
                <div class="line1">
                    <p class="mt-1 text-white">
                        <center> SILAHKAN PILIH MENU TERLEBIH DAHULU </center>
                    </p>
                </div>
            </div>
        </nav>
        <div style="display: flex">
            <side1>
                @if ($getStatus != 0)
                    <a><img src="assets/img/rating_off.png" class="rounded float-right" /></a>
                @else
                    <a href="/kepuasan"><img src="assets/img/rating.png" class="rounded float-right" /></a>
                @endif
            </side1>
            <side2>
                @if ($getStatus != 1)
                    <a> <img src="assets/img/survey_off.png" class="rounded float-right" /></a>
                @else
                    <a href="/survey"> <img src="assets/img/survey.png" class="rounded float-right" /></a>
                @endif
                <p> </p>
            </side2>
            <side3>
                @if ($getStatus != 2)
                    <a><img src="assets/img/saran_off.png" class="rounded float-right" /></a>
                @else
                    <a href="/saran"><img src="assets/img/saran_on.png" class="rounded float-right" /></a>
                @endif
                <p> </p>
            </side3>
            <side4>
                @if ($getStatus == 2 || $getStatus == 3)
                    <a href="/exit"><img src="assets/img/exit.png" class="rounded float-right"></a>
                @else
                    <a><img src="assets/img/exit_off.png" class="rounded float-right"></a>
                @endif
                <p> </p>
            </side4>
        </div>
        <footer>
            <p>
                <center> Silahkan Mengisi Indeks Kepuasan Masyarakat <br> dan Survey Kepuasan Masyarakat </center>
            </p>
        </footer>
    </div>


</body>

</html>
