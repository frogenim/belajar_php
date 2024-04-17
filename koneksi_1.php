<?php
$host = "localhost";
$username = "nama_pengguna_database";
$password = "kata_sandi_database";
$database = "nama_database";

$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
