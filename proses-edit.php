<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_kartu=$_POST['no_kartu'];
    $jenis_kartu=$_POST['jenis_kartu'];

    $sql = "UPDATE tb_siswa set nama_siswa='$nama_siswa', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($conn, $sql);

    $sql = "UPDATE tb_kartu set no_kartu='$no_kartu', jenis_kartu='$jenis_kartu' WHERE id_kartu='$id_siswa'";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>