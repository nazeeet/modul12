<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Gaji</th>
        </tr>
        @foreach($pegawais as $pegawai)
        <tr>
            <td>{{ $pegawai->name }}</td>
            <td>{{ $pegawai->posisi }}</td>
            <td>{{ $pegawai->gaji }}</td>
        </tr>
        @endforeach
    </table>

    <h2>Tambah Pegawai Baru</h2>
    <form method="post" action="{{ url('/tambah-pegawai') }}">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <br>

        <label for="posisi">Posisi:</label>
        <input type="text" name="posisi" required>
        <br>
        <br>

        <label for="gaji">Gaji:</label>
        <input type="text" name="gaji" required>
        <br>
        <br>

        <button type="submit">Add</button>
    </form>
</body>
</html>
