<?php
require 'config/connect.php';

//untuk menangkap data dari URL dengan GET
$NPM = $_GET['NPM'];

//query delete
$delete = $mysqli->query("DELETE  FROM mahasiswa WHERE NPM='$NPM'");

//cek kondisi
if($delete){
  echo "
  <div style='text-align:center;color: #155724;background-color: #d4edda;border:2px solid #c3e6cb;border-radius:5%;padding:10px 10px;width:300px;'>
    Data Berhasil Dihilangkan :'<
  </div>;
  ";
}else{
  echo "
  <div style='text-align:center;color: #721c24;background-color: #f8d7da;border:2px solid #f5c6cb;border-radius:5%;padding:10px 10px;width:300px;'>
    Data Gagal Dihilangkan :)
  </div>
  ";
}

?>

<a href="index.php"> Kembali ke Index</a>
