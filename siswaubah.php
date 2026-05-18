<?php
include "../koneksi.php";

$idsiswa = isset($_GET['idsiswa']) ? $_GET['idsiswa'] : '';

if ($idsiswa == '') {
    die("ID siswa tidak ditemukan di URL");
}

$sql = "SELECT * FROM tbl_siswa WHERE idsiswa = '$idsiswa'";
$query = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data siswa tidak ditemukan di database");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Siswa</title>
</head>
<body>

<h3>Edit Siswa</h3>

<form action="halaman/siswa/siswaubah_aksi.php" method="post">
    <table>
        <tr>
            <td>ID Siswa</td>
            <td><input type="text" name="idsiswa" value="<?php echo $data['idsiswa']; ?>" readonly></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="namasiswa" value="<?php echo $data['namasiswa']; ?>"></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tombolubah" value="Perbarui"></td>
        </tr>
    </table>
</form>

</body>
</html>