<html>
<head>
	<title>Tambah Penyewa</title>
</head>
<body>
	<h3>Data penyewa mobil</h3>
	<br/>
	<br/>
	<form action="/crudpenyewa/market" method="post">
		{{ csrf_field() }}
		Id Penyewa <input type="text" name="idpenyewa" required="required"> <br/>
		Nama Penyewa <input type="text" name="namapenyewa" required="required"> <br/>
        Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"> <br/>
        E-mail <input type="text" name="email" required="required"> <br/>
        No.Telp <input type="number" name="notelp" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    <a href="/crudpenyewa"> Kembali</a>
 
</body>
</html>