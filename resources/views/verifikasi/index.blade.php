<!DOCTYPE html>
<html>
<head>
    <title>Data Verifikasi</title>
</head>
<body>

    <h1>Data Verifikasi</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama KK</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Catatan Admin</th>
        </tr>

        @foreach($data as $item)
        <tr>
            <td>{{ $item->nama_kepala_keluarga }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->catatan_admin }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>