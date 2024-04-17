<?php 
if (isset($_POST['Kirim'])) {
    
    $NIS = $_POST['nis'];
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $Alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <table>
            <tr>
            <h2 align="center"><font color="blue">Pendaftaran Ekstrakulikuler</font></h2>
            <hr><br>
            </tr>
            <tr>

                <table>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><?=$NIS?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$Nama?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$Kelas?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?=$tanggal_lahir?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$Alamat?></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td><?=$kota?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$jenis_kelamin?></td>
                    </tr>
                    <tr>
                        <td>Hobby</td>
                        <td>:</td>
                        <td><?php 
                        if (isset($_POST['hobby1'])) {
                            echo "- " . $_POST['hobby1'] . "<br>";
                        }
                        if (isset($_POST['hobby2'])) {
                            echo "- " . $_POST['hobby2'] . "<br>";
                        }
                        if (isset($_POST['hobby3'])) {
                            echo "- " . $_POST['hobby3'] . "<br>";
                        }
                        if (isset($_POST['hobby4'])) {
                            echo "- " . $_POST['hobby4'] . "<br>";
                        }
                        if (isset($_POST['hobby5'])) {
                            echo "- " . $_POST['hobby5'] . "<br>";
                        }
                        ?></td>
                    </tr>
                    <tr>
                        <td>Pilihan Ekskul</td>
                        <td>:</td>
                        <td><?php 
                            if (isset($_POST['ekstra'])) {
                            $az = $_POST['ekstra'];
                            foreach ($az as $a){
                                echo "$a <br>";
                            }
                        }
                        ?></td>
                    </tr>
                </table>
            </tr>
        </table>
        <br>
    </center>
</body>
</html>