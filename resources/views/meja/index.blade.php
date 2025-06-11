<!DOCTYPE html>
<html>
<head>
    <title>Data Meja</title>
</head>
<body>
    <h1>Daftar Meja</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Merk Meja</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
        </tr>
        @foreach($data as $meja)
        <tr>
            <td>{{ $meja->id }}</td>
            <td>{{ $meja->merkmeja }}</td>
            <td>{{ $meja->hargameja }}</td>
            <td>{{ $meja->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $meja->berat }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
