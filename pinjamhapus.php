<?php

include "../../../koneksi.php";

$idpinjam = $_GET['idpinjam']; 

$sql ="DELETE from tbl_peminjaman WHERE idpinjam= $idpinjam";
$query = mysqli_query($conn, $sql);

if($query) {
    echo "<script>alert('Data Berhasil Di Hapus');</script>";
    header("Location:../../index.php?page=pinjam");
} else {
    echo "<script>alert('Data Gagal Di Hapus');</script>";
    header("Location:../../index.php?page=pinjam");
}

?>