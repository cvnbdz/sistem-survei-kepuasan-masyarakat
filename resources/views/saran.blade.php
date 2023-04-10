<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/saran.css" rel="stylesheet" />
    <title>IKM : Polres Karanganyar</title>
    <link rel="stylesheet" href="{!! asset('css/jqbtk.min.css') !!}">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container">
        <div class="saran">
            <form action="/saran" method="POST">
                @csrf
                <h2> - KRITIK DAN SARAN - </h2>
                <hr>
                <p> Silahkan Mengisi Masukkan Berupa Kritik dan Saran </p>

                <textarea rows="12" cols="45" placeholder="Silahkan Isi Kritik dan Saran" id="saran" name="saran"></textarea><br />
                <button type="submit" class="btn btn-survey btn-block btn-lg" value="Submit">Submit</button>

            </form>
        </div>
        <div class="right">
            <img src="assets/img/saran2.png">
        </div>
    </div>
</body>
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
        $('#saran').keyboard({
            type: 'text'
        });
    });
</script>

</html>
