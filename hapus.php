<?php
include("koneksi.php");

$id_siswa = $_GET['id_siswa'];
$sql = "DELETE FROM tb_kartu WHERE id_kartu='$id_siswa'";
$sql = "DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'";

$query=mysqli_query($conn, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>