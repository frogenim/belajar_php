<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $hobby = isset($_POST["hobby"]) ? implode(", ", $_POST["hobby"]) : "";
    $ekstra = isset($_POST["ekstra"]) ? implode(", ", $_POST["ekstra"]) : "";

    // Tampilkan hasil data
    echo "<h2>Data Pendaftaran Ekstrakurikuler:</h2>";
    echo "<p>NIS: $nis</p>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Kelas: $kelas</p>";
    echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Kota: $kota</p>";
    echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
    echo "<p>Hobby: $hobby</p>";
    echo "<p>Pilihan Ekstra: $ekstra</p>";
} else {
    // Redirect ke halaman utama jika form tidak diakses secara langsung
    header("Location: lgn.php");
    exit();
}
?>