<html>
    <head>
        <title>Insert Data Siswa</title>
    </head>
    <body>
        <form method="POST" action="">
            <table border="1">
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="NIS"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Sumbit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
<?php
// memanggil file koneksi.php
    include "koneksi.php";
        @$NIS = $_POST['NIS'];
        @$nama = $_POST['nama'];
        @$kirim = $_POST['submit'];
        @$query = "INSERT INTO tb_siswa (NIS,nama) VALUES ('$NIS','$nama')";

//hasil data array
    if ($kirim) {
        $hasil = mysqli_query($koneksi,$query);
        echo "Data Berhasil Disimpan  ";
        echo "<a href='tampil.php'>Lihat Data</a>";
    }
?>
    </body>
</html>
<?php
echo "<a href='insert.php'>Daftar</a>"
?>