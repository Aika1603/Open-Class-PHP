<?php
// Jangan lupa panggil file database.php dengan require_once
require_once 'config/database.php'; //memanggil konfigurasi db

//menangkap data yang dikirim dari page sebelumnya
  $NPM = $_POST['NPM']; //tulis selanjutnya
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $fakultas = $_POST['fakultas'];

//insert ke tabel mahasiswa
  $insert = $mysqli->query("INSERT INTO mahasiswa (NPM, nama, kelas, fakultas)
  VALUES ('$NPM', '$nama', '$kelas', '$fakultas')");

//cek kondisi
  if($insert == TRUE){
    echo "
    <div style='text-align:center;color: #155724;background-color: #d4edda;border:2px solid #c3e6cb;border-radius:5%;padding:10px 10px;width:300px;'>
      Data Berhasil Ditambahkan :)
    </div>
    ";
  }else{
    echo "
    <div style='text-align:center;color: #721c24;background-color: #f8d7da;border:2px solid #f5c6cb;border-radius:5%;padding:10px 10px;width:300px;'>
      Data Gagal Disimpan :(
    </div>
    ";
  }
    echo "<a href='read_table.php'>Kembali</a>";
 ?>
