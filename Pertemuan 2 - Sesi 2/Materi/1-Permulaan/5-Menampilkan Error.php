<?php
/*
  Ada kalanya suatu koneksi ke database bisa terputus
  perlu ada pesan kesalahan untuk menanganinya.
*/

/*
  Pesan kesalahan saat proses koneksi
*/
    // buat koneksi dengan MySQL, gunakan database: universitas
    $mysqli = new mysqli("localhost", "root", "","universitas");

    // cek koneksi
    if ($mysqli->connect_errno) {
       die('Koneksi Error: '.$mysqli->connect_errno.
       ' - '. $mysqli->connect_error);
       //sedikit penjelasan tentang fungsi die();
    }

    // koneksi berhasil
    echo 'Koneksi Berhasil : '.$mysqli->host_info."<br />";


/*
  Pesan kesalahan pada akses query
*/
    // // jalankan query
    // $result = $mysqli->query("SELECT * FROM mahasiswa");
    //
    // // cek hasil query
    // if ($mysqli->errno) {
    // die('Query Error : '.$mysqli->errno.' - '.$mysqli->error);
    // }
    // // tampilkan query
    // $data = $result->fetch_row();
    //
    // foreach ($data as $row) {
    // echo "$row[0] $row[1] $row[2] $row[3]";
    // echo "<br />";
    // }

 ?>
