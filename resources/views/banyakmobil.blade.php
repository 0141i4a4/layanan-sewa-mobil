<html>
    <head>
        <title>Mobil yang tersedia</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <link href="./bootstrap-4.3.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./style.css">
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
                <div class="cari">
                    <form action="banyakmobil/cari">
                        <input type="text" name="cari" placeholder="Cari mobil..." value="{{old('cari')}}">
                        <button type="button" class="btn btn-info">Cari</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/apv.png" style="width:200px; height:200px;"></br>
                <p>APV</p>
                <p>Rp.250.000,00/hari</p>
                <form action="/pilihapv" method="get">
                    <input type="hidden" name="apv" value="apv" required="required">
                    <input type="hidden" name="hargaapv" value="250000" required="required">
                    <button type="submit" class="btn btn-info">Pilih</button>
                </form>
            </div>
            <div class="col-md-4">
                <img src="img/avanza.png" style="width:200px; height:200px;"></br>
                <p>Avanza</p>
                <p>Rp.250.000,00/hari</p>
                <form action="/pilihavanza" method="get">
                    <input type="hidden" name="avanza" value="avanza" required="required">
                    <input type="hidden" name="hargaavanza" value="250000" required="required">
                    <button type="submit" class="btn btn-info">Pilih</button>
                </form>
            </div>
            <div class="col-md-4">
                <img src="img/xenia.png" style="width:200px; height:200px;"></br>
                <p>Xenia</p>
                <p>Rp.250.000,00/hari</p>
                <form action="/pilihxenia" method="get">
                    <input type="hidden" name="xenia" value="xenia" required="required">
                    <input type="hidden" name="hargaxenia" value="250000" required="required">
                    <button type="submit" class="btn btn-info">Pilih</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="img/ferrari.png" style="width:200px; height:200px;"></br>
                <p>Ferrari</p>
                <p>Rp.5.000.000,00/hari</p>
                <form action="/pilihferrari" method="get">
                    <input type="hidden" name="ferrari" value="ferrari" required="required">
                    <input type="hidden" name="hargaferrari" value="5000000" required="required">
                    <button type="submit" class="btn btn-info">Pilih</button>
                </form>
            </div>
            <div class="col-md-4">
                <img src="img/gallardo.png" style="width:200px; height:200px;"></br>
                <p>Gallardo</p>
                <p>Rp.5.000.000,00/hari</p>
                <form action="/pilihgallardo" method="get">
                    <input type="hidden" name="gallardo" value="gallardo" required="required">
                    <input type="hidden" name="hargagallardo" value="5000000" required="required">
                    <button type="submit" class="btn btn-info">Pilih</button>
                </form>
            </div>
            <div class="col-md-4">
                <img src="img/vellfire.png" style="width:200px; height:200px;"></br>
                <p>Vellfire</p>
                <p>Rp.500.000/hari</p>
                <form action="/pilihvellfire" method="get">
                    <input type="hidden" name="vellfire" value="vellfire" required="required">
                    <input type="hidden" name="hargavellfire" value="500000" required="required">
                    <button type="submit" class="btn btn-info">Pilih</button>
                </form>
            </div>
        </div>
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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>