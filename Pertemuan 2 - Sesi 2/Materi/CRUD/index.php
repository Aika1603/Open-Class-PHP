<?php
  // Disini panggil connect.php
  require 'config/connect.php';

  //membuat query SELECT
  $query = $mysqli->query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi CRUD</title>
  </head>
  <body>
    <h1>Data Mahasiswa Fasilkom</h1>
    <a href="add.php" >Tambah Data+</a>
    <br/>
    <table border="1" style="border-collapse: collapse;width: 100%;">
      <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Fakultas</th>
        <th>Action</th>
      </tr>
      <?php
        while ($row = $query->fetch_assoc()) {
          echo
          "<tr>
          <td>".$row['NPM']."</td>
          <td>".$row['nama']."</td>
          <td>".$row['kelas']."</td>
          <td>".$row['fakultas']."</td>
          <td>
            <a href='update.php?NPM=".$row['NPM']."' target='_blank'>Update</a><br/>
            <a href='delete.php?NPM=".$row['NPM']."' >Delete</a>
          </td>
          </tr>";
        }
       ?>
    </table>
  </body>
</html>
