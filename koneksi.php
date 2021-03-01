<?php
$host = "localhost";
$user = "root";
$pass = "";
$nama = "data";

$koneksi =mysqli_connect($host, $user, $pass, $nama);
if (!$koneksi) {
    die ("koneksi tidak terhubung");
}
?>
