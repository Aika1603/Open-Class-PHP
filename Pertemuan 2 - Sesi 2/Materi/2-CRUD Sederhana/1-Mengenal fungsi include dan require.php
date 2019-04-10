<?php
/*
  Tujuannya memasukkan file kedalam dokumen induk yang memanggilnya.

  Perbedaan :
  - require akan menghasilkan kesalahan fatal (E_COMPILE_ERROR) dan menghentikan skrip
  - include hanya akan menghasilkan peringatan (E_WARNING) dan skrip akan berlanjut

  Contoh syntax :
  include 'index.php'; //bentuk statement
  // atau bisa ditulis
  include ('index.php'); //bentuk fungsi

  require 'index.php';

  Penggunaan *_once:
  include_once 'index.php';

  require_once 'index.php';

*/

// Kita akan memanggil file database.php
include 'config/database.php';
echo 'Text ini akan ditampilkan setelah proses include';

 ?>
