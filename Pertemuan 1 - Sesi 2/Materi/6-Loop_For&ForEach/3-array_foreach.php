<?php

$arr_asos = array('nama'=>'PHP',
  'tahun'=>1995,
  'pembuat'=>'R Lerdorf');

// menampilkan array asosiatif di atas menggunakan forEach
foreach ($arr_asos as $kunci=>$nilai) {
  echo $kunci . ' : ' . $nilai . "<br/>";
}


 ?>
