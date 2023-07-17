<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "digitalent";

$connect = mysqli_connect($host,$user,$pass,$db);

if(!$connect){
    die("Koneksi dengan database gagal".mysqli_connect_error());
}