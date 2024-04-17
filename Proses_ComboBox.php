<?php
if (isset($_POST['Pilih'])) {
    $film = $_POST['kartun'];
    echo "Film Kartun Favorit Anda adalah :
    <font color=magenta><b>$film</b></font>";
}
?>