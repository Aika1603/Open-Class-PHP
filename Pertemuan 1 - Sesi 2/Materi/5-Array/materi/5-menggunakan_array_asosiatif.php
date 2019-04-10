<?php
// Array asosiatif disebut juga array Maps

$borobudur = array(2500, '750 SM', 'Magelang', 'Jawa Tengah');

$borobudur_asosiatif = array( 'luas' => 2500,
  'tahun' => '750 SM',
  'lokasi'  => 'Magelang',
  'provinsi'=> 'Jawa Tengah'
);

/*
  Bandingkan array asosiatif dengan array biasa
*/

//menambahkan data baru pada array $borobudur

//menambahkan data baru pada array $borobudur_asosiatif



//Mengakses array $borobudur
echo $borobudur[3];
//Mengakses array asosiatif $borobudur_asosiatif
echo $borobudur_asosiatif['provinsi'];



 ?>
