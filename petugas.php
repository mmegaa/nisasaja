<?php
include "../koneksi.php";
$query = "SELECT * FROM tbl_petugas";
$data = mysqli_query($conn, $query);
?>
<h3>Daftar petugas</h3>
<h5><a href="index.php?page=petugastambah">[+] Tambah petugas</a></h5>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama petugas</th>
        <th>username</th>
        <th>No Hp</th>
        <th>Aksi</th>
    </tr>
    <?php 
    $nomor = 1;
    while($row = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td> $nomor </td>";
        echo "<td>". $row['namapetugas'] ."</td>";
        echo "<td>". $row['username'] ."</td>";
        echo "<td>". $row['hp'] ."</td>";
        echo "<td>";
        echo "<a href='../admin/index.php?page=petugasubah&idpetugas=" .$row['idpetugas']."'>Edit</a> |";
        echo "<a href='halaman/petugas/petugashapus.php?idpetugas=" .$row['idpetugas']."'> Delete</a>";
        echo "</td>";
        echo "</tr>";
        $nomor++;
        
    }
    
    ?>
</table>