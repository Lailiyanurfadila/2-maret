<?php
include("koneksi.php");
if(!isset($_GET['id_siswa'])){
    header("location:tampil.php");
}

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM tb_siswa INNER JOIN tb_kartu ON tb_siswa.id_kartu=tb_kartu.id_kartu WHERE tb_siswa.id_siswa='$id_siswa'";
$query = mysqli_query($conn, $sql);
$tb_siswa=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data</h2>
    <table border="1">
        <form action ="proses-edit.php" method="POST">
            <input type = "hidden" name="id_siswa" value="<?php echo $tb_siswa['id_siswa']?>"/>
            <tr>
            <td><label for="nama_siswa"> Nama Siswa :</label></td>
            <td><input type="text" name="nama_siswa" value="<?php echo $tb_siswa['nama_siswa']?>"/></td>
</tr>
<tr>
<tr>
    <td><label for="alamat"> Alamat :</label></td>
    <td><input type="text" name="alamat" value="<?php echo $tb_siswa['alamat']?>"/></td>
</tr>
<tr>
    <td><label for="jenis_kelamin"> Jenis Kelamin :</label></td>
    <td><input type="radio" name="jenis_kelamin" value="laki-laki" />Laki laki</td>
    <td><input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan</td>
</tr>
<tr>
    <td><label for="no_kartu"> No Kartu :<label></td>
    <td><input type="number" name="no_kartu" value="<?php echo $tb_siswa['no_kartu']?>"/></td>
</tr>
<tr>
    <td><label for="jenis_kartu"> Jenis Kartu :</label></td>
    <td><input type="text" name="jenis_kartu" value="<?php echo $tb_siswa['jenis_kartu']?>"/></td>
</tr>
<tr>
    <td><input type="submit" name="edit" value="edit"></td>
</tr>
</table>
</form>
</body>
</html>