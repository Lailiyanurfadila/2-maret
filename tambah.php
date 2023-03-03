<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="0">
        <h2>Form Tambah</h2>
        <form action="proses-tambah.php" method="POST">
            <tr>
                    <td><label for="nama_siswa"> Nama Siswa :</label></td>
                    <td><input type="text" name="nama_siswa" /></td>
</tr>
<tr>
    <td><label for="alamat"> Alamat :</label></td>
    <td><input type="text" name="alamat" /></td>
</tr>
<tr>
    <td><label for="jenis_kelamin"> Jenis Kelamin :</label></td>
    <td><input type="radio" name="jenis_kelamin" value="laki-laki" />Laki laki</td>
    <td><input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan</td>
</tr>
<tr>
    <td><label for="no_kartu"> No Kartu :<label></td>
    <td><input type="number" name="no_kartu" /></td>
</tr>
<tr>
    <td><label for="jenis_kartu"> Jenis Kartu :</label></td>
    <td><input type="text" name="jenis_kartu" /></td>
</tr>
<tr>
    <td><input type="submit" value="simpan" name="simpan" /></td>
</tr>
</form>
</body>
</html>