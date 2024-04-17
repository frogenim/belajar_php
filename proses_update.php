<?php
    include "koneksi.php";
    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];

    $query = "UPDATE tb_siswa SET nama = '$nama' WHERE NIS = '$NIS';";
    $hasil = mysqli_query($koneksi,$query);
    if($hasil) {
        header('location:tampil.php');
    } else {
        echo "Gagal Update Data";
        echo mysqli_error();
    }
?>