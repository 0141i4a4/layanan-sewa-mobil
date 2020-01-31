<html>
<head>
	<title>Tambah Sewa mobil</title>
</head>
<body>
	<h3>Data penyewaan mobil</h3>
	<br/>
	<br/>
	<form action="/crudmobil/store" method="post">
		{{ csrf_field() }}
		Id Sewa <input type="text" name="idsewa" required="required"> <br/>
		Nama mobil <input type="text" name="Namamobil" required="required"> <br/>
		Harga Sewa <input type="number" name="hargasewa" required="required"> <br/>
		Lama Sewa <input type="number" name="lamasewa" required="required"> <br/>
        Harga total <input type="number" name="hargatot" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    <a href="/crudmobil"> Kembali</a>
 
</body>
</html>