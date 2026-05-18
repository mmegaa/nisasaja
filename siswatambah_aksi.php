<?php
include"../../../koneksi.php";

if(isset($_POST['tomboltambah'])){
    $nis= $_POST['nis'];
    $namasiswa= $_POST['namasiswa'];
    $kelas= $_POST['kelas'];
    $alamat= $_POST['alamat'];
    $hp= $_POST['hp'];

    $sql ="INSERT INTO tbl_siswa (nis, namasiswa, kelas, alamat, hp)
    VALUES ('$nis', '$namasiswa', '$kelas', '$alamat', '$hp')";

    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "<script>alert('Data Berhasil Di Simpan');</sript>";
        header("Location:../../index.php?page=siswa");
    }else {
        echo "<script>alert('Data Gagal Di Disimpan');</script>";
        header ("Location :../../index.php?page=siswatambah");
    }
}

?>