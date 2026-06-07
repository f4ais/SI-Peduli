<!DOCTYPE html>
<html>
<head>
    <title>Pendataan JOB AMAD</title>
</head>
<body>

<h1>Pendataan Keluarga Kurang Mampu</h1>

<form action="/pendataan/store" method="POST">
    @csrf

    <label>Kecamatan</label>
    <br>
    <input type="text" name="kecamatan" required>
    <br><br>

    <button type="submit">
        Simpan Data
    </button>
</form>

<br>

<a href="/dashboard-admin">
    Dashboard Admin
</a>

</body>
</html>