<?php
  // Disini panggil connect.php
  require 'config/connect.php';

  //mengambil data dari file index.php
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $fakultas = $_POST['fakultas'];

  //memnyimpan data ke dalam database
  $update = $mysqli->query("UPDATE mahasiswa SET nama='$nama',kelas='$kelas',fakultas='$fakultas' WHERE NPM='$npm'");

  //cek kondisi
  if($update == TRUE){
    echo "
    <div style='text-align:center;color: #155724;background-color: #d4edda;border:2px solid #c3e6cb;border-radius:5%;padding:10px 10px;width:300px;'>
      Data Berhasil Diubah :)
    </div>
    ";
  }else{
    echo "
    <div style='text-align:center;color: #721c24;background-color: #f8d7da;border:2px solid #f5c6cb;border-radius:5%;padding:10px 10px;width:300px;'>
      Data Gagal Diubah :(
    </div>
    ";
  }

 ?>

<a href="index.php"> Kembali ke Index</a>
