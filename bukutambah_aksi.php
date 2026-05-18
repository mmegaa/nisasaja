<?php
include"../../../koneksi.php";

if(isset($_POST['tomboltambah'])){
    $idbuku= $_POST['idbuku'];
    $judul= $_POST['judul'];
    $pengarang= $_POST['pengarang'];
    $penerbit= $_POST['penerbit'];
    
    $sql ="INSERT INTO tbl_buku (idbuku, judul, pengarang,penerbit)
    VALUE ('$idbuku', '$judul' , '$pengarang', '$penerbit')";

    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "<script>alert('Data Berhasil Di Simpan');</sript>";
        header("Location:../../index.php?page=buku");
    }else {
        echo "<script>alert('Data Gagal Di Disimpan');</script>";
        header ("Location :../../index.php?page=bukutambah");
    }
}

?>