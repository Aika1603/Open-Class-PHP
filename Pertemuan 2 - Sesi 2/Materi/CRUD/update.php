<?php
  // Disini panggil connect.php
  require 'config/connect.php';

  //untuk menangkap data dari URL dengan GET
  $NPM = $_GET['NPM'];

  //query
  $query =  $mysqli->query("SELECT * FROM mahasiswa WHERE NPM='$NPM'");
  $result = $query->fetch_assoc();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Aplikasi CRUD</title>
   </head>
   <body>
     <h1>Update Data Mahasiswa</h1>
     <form class="" action="update_aksi.php" method="post">
       <label>NPM :</label><br/>
       <input type="text" name="npm" required placeholder="" value="<?= $result['NPM'];?>">
       <br/>
       <label>Nama :</label><br/>
       <input type="text" name="nama" required placeholder="" value="<?= $result['nama'];?>">
       <br/>
       <label>Kelas :</label><br/>
       <input type="text" name="kelas" required placeholder="" value="<?= $result['kelas'];?>">
       <br/>
       <label>Fakultas :</label><br/>
       <input type="text" name="fakultas" required placeholder="" value="<?= $result['fakultas'];?>">

       <br/><hr/>
       <button type="submit">Update</button><br/>
       <a href="index.php">Lihat Semua Data </a>
     </form>
   </body>
 </html>
