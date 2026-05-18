<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Petugas</title>
</head>
<body>

<h3>Tambah Petugas</h3>

<form action="halaman/petugas/petugastambah_aksi.php" method="post">
    <table>
        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" placeholder="Masukkan nama petugas"></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukkan username"></td>
        </tr>

        <tr>
            <td>No HP</td>
            <td><input type="text" name="hp" placeholder="Masukkan no hp"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Masukkan password"></td>
        </tr>

        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="confirm_password" placeholder="Ulangi password"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>

</body>
</html>