<?php

/*
Array asosiatif adalah array yang tidak
menggunakan angka sebagai kunci di setiap nilainya.

Jika tidak ditentukan kunci dari sebuah elemen di array,
PHP akan otomatis memberikan kuncinya berupa angka.
*/


// membuat array biasa
$array_kamu = array(1610, 'VOC Belanda', 350);

// membuat array asosiatif
$array_saya = array( 'tahun' => 1610,
  'organisasi' => 'VOC Belanda',
  'total'  => 350);

// cara mencetak array biasa
echo $array_kamu[0];
echo "\n";
echo $array_kamu[1];
echo "\n";

// cara mencetak array asosiatif
echo $array_saya[ 'tahun'];
echo "\n";
echo $array_saya[ 'organisasi'];


 ?>
