<?php
$dataArray = array(10,5,200,60,75,80,9,2500,87,90);

//menghitung jumlah data dalam array
$jumlahData = array_sum($dataArray);
$RataRata = array_sum($dataArray) / count($dataArray);
$nilaiterkecil = min($dataArray);
$nilaiterbesar = max($dataArray);
//menampilkan hasil 
echo "Jumlah seluruh data dalam array : $jumlahData <br>";
echo "Rata rata seluruh data dalam array : $RataRata <br>";
echo "nilai minimum adalah : $nilaiterkecil <br>";
echo "nilai maximum adalah : $nilaiterbesar <br>";
?>