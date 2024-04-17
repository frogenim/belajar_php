<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobby = $_POST['hobby'];
    $ekstrakurikuler = $_POST['ekstrakurikuler'];

    $query = "INSERT INTO siswa (nis, nama, kelas, tanggal_lahir, alamat, kota, jenis_kelamin, hobby, ekstrakurikuler)
              VALUES ('$nis', '$nama', '$kelas', '$tanggal_lahir', '$alamat', '$kota', '$jenis_kelamin', '$hobby', '$ekstrakurikuler')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <form action="" method="post">
            <!-- Form input data siswa disini -->
        </form>
    </div>
</body>
</html>

<?php
mysqli_close($koneksi);
?>
