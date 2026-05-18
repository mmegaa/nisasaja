<?php

include "../../../koneksi.php";

$idsiswa = $_GET['idsiswa']; 

$sql ="DELETE from tbl_siswa WHERE idsiswa = $idsiswa";
$query = mysqli_query($conn, $sql);

if($query) {
    echo "<script>alert('Data Berhasil Di Hapus');</script>";
    header("Location:../../index.php?page=siswa");
} else {
    echo "<script>alert('Data Gagal Di Hapus');</script>";
    header("Location:../../index.php?page=siswa");
}

?>