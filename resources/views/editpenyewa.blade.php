<!DOCTYPE html>
<html>
<head>
	<title>Edit data penyewa</title>
</head>
<body>
 
	<h3>Edit data penyewa</h3>
 
	<a href="/crudpenyewa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($data_penyewa as $dp)
	<form action="/crudpenyewa/updatepenyewa" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="idpenyewa" value="{{$dp->Id_penyewa}}"> </br>
		Nama Penyewa <input type="text" name="namapenyewa" required="required" value="{{ $dp->Nama_penyewa}}"> <br/>
        Umur <input type="number" name="umur" required="required" value="{{ $dp->Umur}}"> <br/>
		Alamat <input type="text" name="alamat" required="required" value="{{$dp->Alamat}}"> <br/>
        E-mail <input type="text" name="email" required="required" value="{{$dp->Email}}"> <br/>
        No.Telp <input type="number" name="notelp" required="required" value="{{$dp->No_telp}}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>