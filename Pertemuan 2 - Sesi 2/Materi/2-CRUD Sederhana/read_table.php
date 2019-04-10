<?php

require_once 'config/database.php'; //memanggil konfigurasi db


//select data
  $result = $mysqli->query("SELECT * FROM mahasiswa");


?>
<h1>Data Mahasiswa Open Class</h1>
<a href="form.php">Tambah Data+ </a>
<br/>
<br/>
<center>
<table border="1" style="border-collapse: collapse;width: 100%;">
  <tr>
    <td>NPM</td>
    <td>Nama</td>
    <td>Kelas</td>
    <td>Fakultas</td>
    <td>Action</td>
  </tr>

  <?php
    //tulis code php disini
    if ($result->num_rows > 0)
    {

      // output data of each row
      while($row = $result->fetch_assoc()) {
          //tampilkan disini
          echo "
          <tr>
            <td>".$row['NPM']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['kelas']."</td>
            <td>".$row['fakultas']."</td>
            <td>
              <a href='form-update.php?NPM=".$row['NPM']." ' title='Edit Data'>Edit</a><br/>
              <a href='delete.php?NPM=".$row['NPM']." ' title='Hapus Data'>Hapus</a><br/>
            </td>
          </tr>
          ";
      }

    }else
    {

  //jika row data di bawah 0
        echo "
        <tr>
          <td colspan='5'>Data Kosong!</td>
        </tr>";

    }
  ?>

</table>
</center>
