<?php
/*
  strlen() adalah sebuah function yang umum digunakan di PHP.
  Gunanya adalah untuk menghitung panjang dari sebuah string.
  Cara menggunakannya adalah menuliskan sebuah string atau sebuah variabel
  yang mengandung string di antara tanda kurungnya ( ) seperti ini:
*/

//contoh penggunaan
$judul_buku = "panjangnya ada berapa ya?";
$panjang = strlen($judul_buku);
// menghitung panjang dari string pada variabel $panjang
// menggunakan strlen( )
echo $panjang;

 ?>
