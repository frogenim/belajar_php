<html>
    <head><title>Form Ekstrakulikuler</title></head>
    <body>
        <center>
        <form method="post" action="ekskul.php">
            <h2 align="center"><font color="blue">Pendaftaran Ekstrakulikuler</font></h2>
            <hr><br>
            <table border="0">
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <select name="kelas">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>:</td>
                    <td><input type="text" name="kota"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobby1" value="Membaca"> Membaca <br>
                        <input type="checkbox" name="hobby2" value="Olahraga"> Olahraga <br>
                        <input type="checkbox" name="hobby3" value="Menyanyi"> Menyanyi <br>
                        <input type="checkbox" name="hobby4" value="Menari"> Menari <br>
                        <input type="checkbox" name="hobby5" value="Traveling"> Traveling <br>
                    </td>
                </tr>
                <tr>
                    <td>Pilihan Ekskul</td>
                    <td>:</td>
                    <td>
                        <select name="ekstra[]" value="ekstra" size="7" required multiple>
                            <option value="Pramuka">Pramuka</option>
                            <option value="Basket">Basket</option>
                            <option value="Volly">Volly</option>
                            <option value="Band">Band</option>
                            <option value="Seni Tari">Seni Tari</option>
                            <option value="Robotic">Robotic</option>
                            <option value="Bulu Tangkis">Bulu Tangkis</option>
                            <option value="Broadcasting">Broadcasting</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="Kirim" value="Kirim">
                        <input type="reset" name="Reset" id="Reset">
                    </td>
                </tr>
                <tr>
                    <td><font color="red">*</font>Harus Di isi</td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>