<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$siswa = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses update data siswa disini

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Data Siswa</h2>
        <form action="" method="post">
            <!-- Form input data siswa disini -->
        </form>
    </div>
</body>
</html>

<?php
mysqli_close($koneksi);
?>