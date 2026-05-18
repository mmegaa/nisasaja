<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <form action="halaman/buku/bukutambah_aksi.php" method="post">
        <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="idbuku" placeholder="Masukkan ID buku"></td>
            </tr>
             <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" placeholder="Masukkan judul buku"></td>
            </tr>
             <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" placeholder="Masukkan pengarang buku"></td>
            </tr>
             <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" placeholder="Masukkan penerbit buku"></td>
            </tr>
             <tr>
                <td></td>
                <td><input type="submit" name="tomboltambah" value="tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>