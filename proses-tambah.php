<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $nama_siswa=$_POST['nama_siswa'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_kartu=$_POST['no_kartu'];
    $jenis_kartu=$_POST['jenis_kartu'];

    $sql = "INSERT INTO tb_kartu(no_kartu, jenis_kartu) VALUES ('$no_kartu','$jenis_kartu')";
    $query=mysqli_query($conn, $sql);

    $sql = "SELECT max(id_kartu) AS kartu_id FROM tb_kartu LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);
    $kartu_id = $data['kartu_id'];

    $sql = "INSERT INTO tb_siswa(id_kartu, nama_siswa, alamat, jenis_kelamin) VALUES ('$kartu_id','$nama_siswa','$alamat','$jenis_kelamin')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:tampil.php?status=sukses");
    }else{
        header("location:tampil.php?status=gagal");
    }
}