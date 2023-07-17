<?php
//koneksi ke database
include '../connection/connect.php';

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $aspirasi = $_POST['aspirasi'];

    $query = mysqli_query($connect, "INSERT INTO aspirasi (nim,nama,aspirasi) VALUES('$nim','$nama','$aspirasi')");

    if(!$query){
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header("Location:index.php");
    }else{
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        header("Location:aspirasi.php");
    }
}