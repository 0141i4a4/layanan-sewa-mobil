<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('./style.css') }}">
    </head>
    <body>
        <div class="header">
            <h1>Selamat Datang di Situs Sewa mobil</h1>
            <h3>Melayani dengan sepenuh hati</h3>
            <hr/>
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/Index">Beranda</a>
                    <a class="nav-item nav-link" href="/banyakmobil">Pilihan Sewa mobil</a>
                    <a class="nav-item nav-link" href="/crudmobil">Cek data sewa mobil</a>
                    <a class="nav-item nav-link" href="/crudpenyewa">Cek data penyewa mobil</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row" id="body">
            <div class="col-md-3" id="dm">
                <a href="/daftarmobil">
                    <img src="{{ URL::asset('./img/car.png') }}"></br>
                    DAFTAR MOBIL
                </a>
            </div>
            <div class="col-md-3" id="dp">
                <img src="{{ URL::asset('./img/penyewa.png') }}"></br>
                <a href="/daftarpenyewa">DAFTAR PENYEWA</a>
            </div>
            <div class="col-md-3" id="crudmobil">
                <img src="{{ URL::asset('./img/list.png') }}"></br>
                <a href="/crudmobil">CEK MOBIL YANG DISEWA</a>
            </div>
            <div class="col-md-3" id="crudpenyewa">
                <img src="{{ URL::asset('./img/list2.png') }}"></br>
                <a href="/crudpenyewa">CEK DATA PENYEWA</a>
            </div>
        </div>
        <container>
            <div class="row" id="footer">
                <div class="col-md-3">
                    <h3>Hubungi Kami</h3>
                    <ul style="padding:0px;">
                        <ol style="padding:0px;">022-4567887</ol>
                        <ol style="padding:0px;">sewa_mobil@gmail.com</ol>
                        <ol style="padding:0px;">087655543323</ol>
                    </ul>
                </div>
                <hr/>
            </div>
            <div class="row center" id="copyright">
                <p>Copyright&copy;2019 by Nogi Corporation</p>
            </div>
        </container>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>