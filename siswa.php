<?php
include "../koneksi.php";
$query = "SELECT * FROM tbl_siswa";
$data = mysqli_query($conn, $query);
?>
<h3>Daftar Siswa</h3>
<h5><a href="index.php?page=siswatambah">[+] Tambah Siswa</a></h5>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Aksi</th>
    </tr>
    <?php 
    $nomor = 1;
    while($row = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td> $nomor </td>";
        echo "<td>". $row['nis'] ."</td>";
        echo "<td>". $row['namasiswa'] ."</td>";
        echo "<td>". $row['kelas'] ."</td>";
        echo "<td>". $row['alamat'] ."</td>";
        echo "<td>". $row['hp'] ."</td>";
        echo "<td>";
        echo "<a href='../admin/index.php?page=siswaubah&idsiswa=" .$row['idsiswa']."'>Edit</a> |";
        echo "<a href='halaman/siswa/siswahapus.php?idsiswa=" .$row['idsiswa']."'> Delete</a>";
        echo "</td>";
        echo "</tr>";
        $nomor++;
        
    }
    
    ?>
</table>