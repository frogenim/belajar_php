<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
        <form action="" method="post" name="login">
            <h2>Halaman Login</h2>
            Username : <input type="text" name="username"><br>
            Password : <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Kirim">
        </form>
    </body>
</html>
<?php
error_reporting(0);
$username=$_POST['username'];
$password=$_POST['password'];
if (isset($_POST['submit'])) {
    if ($username=="admin" && $password=="1234") {
        header("Location:Pendaftaran_Ekskul.php");
    }else{
        echo "Username atau Password Salah";
    }
}
?>