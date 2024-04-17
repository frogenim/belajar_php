<?php
//include 'koneksi.php';
@$nis=$_POST['nis'];
@$nama=$_POST['nama'];
@$alamat=$_POST['alamat'];
@$email=$_POST['email'];
@$kelas=$_POST['kelas'];
@$tempat=$_POST['tempat'];
@$tanggal_lahir=$_POST['tanggal_lahir'];
@$jenis_kelamin=$_POST['jenis_kelamin'];
@$hobby=$_POST['hobby'];
@$ekstra=$_POST['ekstra'];
@$kirim=$_POST['submit'];

if($kirim) {
    $daftar_hobby = implode(', ', $hobby);
    $daftar_ekstra = implode (', ', $ekstra);

    echo "<b>Data Berhasil Disimpan..</b><br>";
    echo "NIS Siswa : $nis<br>";
    echo "Nama Siswa : $nama<br>";
    echo "Alamat Siswa : $alamat<br>";
    echo "Email Siswa : $email<br>";
    echo "Kelas : $kelas<br>";
    echo "Tempat : $tempat<br>";
    echo "Tanggal lahir : $tanggal_lahir<br>";
    echo "Jenis Kelamin : $jenis_kelammin<br>";
    echo "Hobby : $hobby<br>";
    echo "Ekstra : $ekstra<br>";
}

if (isset($_POST['hobby[]'])) {
    echo "- " . $_POST['hobby1'] . "<br>";
}
if (isset($_POST['hoby2'])) {
    echo "- " . $_POST['hobby2'] . "<br>";
}
if (isset($_POST['hoby3'])) {
    echo "- " . $_POST['hobby3'] . "<br>";
}
if (isset($_POST['hoby4'])) {
    echo "- " . $_POST['hobby4'] . "<br>";
}
if (isset($_POST['hoby5'])) {
    echo "- " . $_POST['hobby5'] . "<br>";
}

if (isset($_POST['submit'])) {
    $kelas = $_POST['kelas'];
}

if (isset($_POST['ekstra'])) {
    $az = $_POST['ekstra'];
    foreach ($az as $a) {
        echo "$a <br>";
    }
}
?>