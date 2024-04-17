<?php
  echo "Kode Program PHP - Luas dan Keliling Segitiga Siku-Siku <br>";
  echo "<br>";
 
  $alas = 10;
  $tinggi = 15;
 
  $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
 
  echo "Alas segitiga = $alas <br>";
  echo "Tinggi segitiga = $tinggi <br>";
 
  echo "<br>";
 
  echo "Keliling segitiga = ".round($alas+$tinggi+$sisi_miring,2)."<br>";
  echo "Luas segitiga = ". round(1/2 * $alas * $tinggi,2) ."<br>";


  echo "<hr>";
  echo "Kode Program PHP - Luas dan Keliling Persegi <br>";
  echo "<br>";
 
  $sisi = 5;
 
  echo "Panjang sisi persegi = $sisi <br>";

  echo "<br>";

  echo "Keliling persegi = (4 x $sisi) = ". 4 * $sisi . "<br>";
  echo "Luas persegi = ($sisi x $sisi) = ". $sisi * $sisi." <br>";


  echo "<hr>";
  echo "Kode Program PHP - Luas dan Keliling Persegi Panjang <br>";
  echo "<br>";

  $panjang = 15;
  $lebar = 30;
 
  echo "Panjang persegi = $panjang <br>";
  echo "Lebar persegi = $lebar <br>";
 
  echo "<br>";
 
  echo "Keliling persegi panjang = (2 * $panjang) + (2 * $lebar) 
        = ".(2 * $panjang) + (2 * $lebar)." <br>";
 
  echo "Luas persegi panjang = $panjang * $lebar
        = ".$panjang * $lebar." <br>";


  echo "<hr>";
  echo "Kode Program PHP - Luas dan Keliling Lingkaran <br>";
  echo "<br>";

  $jari2 = 14;
   
  echo "Jari-jari lingkaran = $jari2<br>";
 
  echo "<br>";
 
  echo "Keliling lingkaran = ".round(22/7 * 2 * $jari2,2)."<br>";
  echo "Luas lingkaran = ". round(22/7 * $jari2 * $jari2,2) ."<br>";
?>