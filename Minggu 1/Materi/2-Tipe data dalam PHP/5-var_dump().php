<?php

/*
Karena sifat variabel dalam PHP yang tidak bertipe (Loosely Typed Language).
maka kita memerlukan sebuah fungsi untuk mengetahui secara lebih detail tipe data dan nilai sebuah variabel. Untuk keperluan inilah PHP menyediakan fungsi var_dump().
*/

//Contohnya
$a= 5; $b=8; $c=4.5;

$hasil1=$a+$b;
$hasil2=$a+$c;
$hasil3=$a.$b;

echo "$hasil1:"; var_dump($hasil1); 
//tampilkan $hasil2 & $hasil3

?>
