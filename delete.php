<?php
    include "koneksi.php";
    $NIS = $_GET['nis'];
    $query = "DELETE FROM tb_siswa WHERE NIS = '$NIS'";
    $hasil = mysqli_query($koneksi,$query);
    if ($hasil) {
?>
    <script language="javascript">document.location.href="tampil.php";</script>
<?php
    } else {
        echo "Gagal Hapus Data";
    }
?>