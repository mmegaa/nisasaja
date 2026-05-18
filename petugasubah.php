<?php
include("../koneksi.php");

$idpetugas = isset($_GET['idpetugas']) ? $_GET['idpetugas'] : '';

$sql = "SELECT * FROM tbl_petugas WHERE idpetugas='$idpetugas'";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h3>Edit petugas</h3>
    <form action="halaman/petugas/petugasubah_aksi.php" method="post">
        <?php
        while($data = mysqli_fetch_assoc($query)){
        ?>

    </table>
        <tr>
            <input type="text" name="idpetugas" Hidden value="<?php echo $data['idpetugas'] ?>">
        </tr>
        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" value="<?php echo $data['namapetugas'] ?>"></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>
        </tr>

        <tr>
            <td>No Hp</td>
            <td><input type="text" name="hp" value="<?php echo $data['hp'] ?>"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td>confirm password</td>
            <td><input type="password" name="cpassword"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tombolubah" value="perbarui"></td>
        </tr>
    </table>
    <?php
        }
    ?>
</form>
</body>
</html>