<?php
// Jangan lupa panggil file database.php dengan require_once
require_once 'config/database.php'; //memanggil konfigurasi db

//menangkap data yang dikirim dari page sebelumnya
  $NPM = $_GET['NPM']; //tulis selanjutnya

//delete mahasiswa dari tabel mahasiswa
  $delete = $mysqli->query("DELETE FROM mahasiswa WHERE NPM='$NPM' ");

//cek kondisi
  if($delete == TRUE){
    echo "
    <div style='text-align:center;color: #155724;background-color: #d4edda;border:2px solid #c3e6cb;border-radius:5%;padding:10px 10px;width:300px;'>
      Delete Berhasil  :)
    </div>
    ";
  }else{
    echo "
    <div style='text-align:center;color: #721c24;background-color: #f8d7da;border:2px solid #f5c6cb;border-radius:5%;padding:10px 10px;width:300px;'>
      Delete Gagal  :(
    </div>
    ";
  }

  echo "<a href='read_table.php'>Kembali</a>";
 ?>
