<?php
  /*
    Mysqli memiliki 2 jenis style, yakni procedural style dan object-oriented style.
    pada open class ini kita akan menggunakan style yang kedua.
  */

    // buat koneksi dengan MySQL object-oriented style, gunakan database: universitas
    $link = new mysqli(alamat_server, username, password, nama_database);

    // cara menjalankan query untuk menampilkan data
    $result = $link->query("SELECT * FROM mahasiswa");

    // cara menjalankan query untuk menambahkan data
    $insert = $link->query("INSERT INTO mahasiswa (NPM, nama, kelas, fakultas)
    VALUES ('NPM', 'nama', 'kelas', 'fakultas')");

    // cara menjalankan query untuk update data
    $update = $link->query("UPDATE mahasiswa SET nama='nama_baru' WHERE NPM=id");

    // cara menjalankan query untuk delete data
    $delete = $link->query("DELETE FROM mahasiswa WHERE NPM=id");

 ?>
