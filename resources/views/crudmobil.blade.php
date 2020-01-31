<!DOCTYPE html>
<html>
<head>
	<title>Data mobil yang disewa</title>
</head>
<body>
	<h3>Data Mobil yang disewa</h3>
 
	<a href="/crudmobil/tambah"> + Tambah data sewaan mobil</a>
	<div class="cari">
        <form action="/crudmobil/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari mobil..." value="{{ old('cari') }}">
            <input type="submit" value="cari">
        </form>
    </div>
	
	<br/>
	<br/>

 
	<table border="1">
		<tr>
            <th>Id Sewa</th>
			<th>Nama mobil</th>
			<th>Harga sewa</th>
			<th>Lama Sewa</th>
			<th>Harga Total</th>
		</tr>

		@foreach($data_mobil as $sm)
		<tr>
			<td>{{ $sm->Id_sewa }}</td>
			<td>{{ $sm->Nama_mobil }}</td>
			<td>{{ $sm->Harga_sewa }}</td>
			<td>{{ $sm->Lama_sewa }}</td>
			<td>{{ $sm->Harga_total }}</td>
			<td>
				<a href="/crudmobil/editmobil/{{ $sm->Id_sewa }}">Edit</a>
				|
				<a href="/crudmobil/hapusmobil/{{ $sm->Id_sewa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>