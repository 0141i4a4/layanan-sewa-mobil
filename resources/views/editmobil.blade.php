<!DOCTYPE html>
<html>
<head>
	<title>Edit data mobil</title>
</head>
<body>
 
	<h3>Edit data mobil</h3>
 
	<a href="/crudmobil"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($data_mobil as $sm)
	<form action="/crudmobil/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="idsewa" value="{{$sm->Id_sewa}}"> </br>
		Nama Mobil <input type="text" required="required" name="Namamobil" value="{{ $sm->Nama_mobil }}"> <br/>
		Harga Sewa <input type="number" required="required" name="hargasewa" value="{{ $sm->Harga_sewa }}"> <br/>
		Lama Sewa <input type="number" required="required" name="lamasewa" value="{{ $sm->Lama_sewa }}"> <br/>
		Harga total <input type="number" required="required" name="hargatot" value="{{ $sm->Harga_total}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>