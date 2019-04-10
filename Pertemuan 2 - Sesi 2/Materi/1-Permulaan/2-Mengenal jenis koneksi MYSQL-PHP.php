<?php

  Dalam PHP ada 3 cara pengaksesan MySQL, yakni melalui
    -PDO (PHP Data Object),
    -mysqli extension,
    -mysql extension.

  Namun, mysql extension berstatus deprecated pada PHP versi 5.5.0 ke atas.


/*
  Cara Penulisan mysql extension, mysqli extension, dan PDO (PHP Data Objects)
*/
  // cara mengakses MySQL menggunakan mysql extension:
  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("universitas");
  $result = mysql_query("SELECT * FROM mahasiswa");
  $row = mysql_fetch_assoc($result);

  // cara mengakses MySQL menggunakan mysqli extension:
  $mysqli = new mysqli("localhost", "root", "", "universitas");
  $result = $mysqli->query("SELECT * FROM mahasiswa");
  $row = $result->fetch_assoc();

  // cara mengakses MySQL menggunakan PDO:
  $pdo = new PDO('mysql:host=localhost;dbname=universitas', 'root', '');
  $statement = $pdo->query("SELECT * FROM mahasiswa");
  $row = $statement->fetch(PDO::FETCH_ASSOC);

/*
  Pada open class PHP ini, kita hanya akan menggunakan jenis koneksi mysqli extension
*/
 ?>
