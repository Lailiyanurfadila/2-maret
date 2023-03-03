<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tampil Data</h2>
    <a href = "tambah.php"><input type= "button" value="tambah" /></a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Kartu</th>
            <th>Jenis Kartu</th>
            <th>Aksi</th>
</tr>

<?php

include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_kartu INNER JOIN tb_siswa ON tb_kartu.id_kartu=tb_siswa.id_kartu");
$no = 1;
foreach ($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama_siswa']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['jenis_kelamin']; ?></td>
        <td><?= $row['no_kartu']; ?></td>
        <td><?= $row['jenis_kartu']; ?></td>
<td>
    <a href = "edit.php?id_siswa=<?=$row['id_siswa']; ?>">Edit</a>||
    <a href = "hapus.php?id_siswa=<?=$row['id_siswa']; ?>">Hapus</a>
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>