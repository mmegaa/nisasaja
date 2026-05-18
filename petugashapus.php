<?php

include "../../../koneksi.php";

$idsiswa = $_GET['idpetugas']; 

$sql ="DELETE from tbl_petugas WHERE idpetugas = $idpetugas";
$query = mysqli_query($conn, $sql);

if($query) {
    echo "<script>alert('Data Berhasil Di Hapus');</script>";
    header("Location:../../index.php?page=petugas");
} else {
    echo "<script>alert('Data Gagal Di Hapus');</script>";
    header("Location:../../index.php?page=petugas");
}

?>