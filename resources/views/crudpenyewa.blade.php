<!DOCTYPE html>
<html>
<head>
	<title>Data penyewa mobil</title>
</head>
<body>
	<h3>Data Penyewa mobil</h3>
 
	<a href="/crudpenyewa/tambah"> + Tambah data penyewa mobil</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
            <th>Id Penyewa</th>
			<th>Nama Penyewa</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>E-mail</th>
            <th>No.Telp</th>
		</tr>

		@foreach($data_penyewa as $dp)
		<tr>
			<td>{{ $dp->Id_penyewa }}</td>
			<td>{{ $dp->Nama_penyewa }}</td>
			<td>{{ $dp->Umur }}</td>
			<td>{{ $dp->Alamat }}</td>
            <td>{{ $dp->Email }}</td>
            <td>{{ $dp->No_telp}}</td>
			<td>
				<a href="/crudpenyewa/editpenyewa/{{ $dp->Id_penyewa }}">Edit</a>
				|
				<a href="/crudpenyewa/hapuspenyewa/{{ $dp->Id_penyewa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>