<html>
    <head>
        <title>Daftar mobil</title>
    </head>
    <body>
        <h3>Daftar mobil yang disewakan</h3>

        <table border="1">
            <tr>
                <th>Nama mobil</th>
                <th>Harga Sewa</th>
                <th>Lama Sewa</th>
                <th>Harga total</th>
            <tr>

            @foreach($data_mobil as $sm)
                <tr>
                    <td>{{$sm->Nama_mobil}}</td>
                    <td>{{$sm->Harga_sewa}}</td>
                    <td>{{$sm->Lama_sewa}}</td>
                    <td>{{$sm->Harga_total}}</td>
                </tr>
            @endforeach
        </table>

    </body>
</html>