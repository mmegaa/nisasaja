<?php
include"../../../koneksi.php";

if(isset($_POST['tombolubah'])){
    $idsiswa= $_POST['idsiswa'];
    $nis= $_POST['nis'];
    $namasiswa= $_POST['namasiswa'];
    $kelas= $_POST['kelas'];
    $alamat= $_POST['alamat'];
    $hp= $_POST['hp'];

    $sql ="UPDATE tbl_siswa SET idsiswa='$idsiswa', nis='$nis', namasiswa='$namasiswa', kelas='$kelas', alamat='$alamat', hp='$hp' WHERE idsiswa=$idsiswa";

    $query = mysqli_query($conn,$sql);

    if ($query) { 
        echo "<script>alert('Data Berhasil Di ubah');</sript>";
        header("Location:../../index.php?page=siswa");
    }else {
        echo "<script>alert('Data Gagal Di ubah');</script>";
        header ("Location :../../index.php?page=siswaubah");
    }
}

?>