<?php

require_once 'config/database.php'; //memanggil konfigurasi db


//select data
  $result = $mysqli->query("SELECT * FROM mahasiswa");

//mengecek jumlah row data pada table
  if ($result->num_rows > 0)
  {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        //tampilkan disini
        echo "NPM ".$row['NPM'];
    }

  }else
  {

//jika row data di bawah 0
      echo "Data Kosong!";

  }

 ?>
