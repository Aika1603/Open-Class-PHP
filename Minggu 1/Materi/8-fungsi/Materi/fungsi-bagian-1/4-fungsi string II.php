<?php

/*
  FUNCTION strpos()
  Sebuah function PHP yang sangat berguna.
  Dengannya anda bisa mendapatkan posisi sebuah string di dalam string yang lainnya.

  Contoh penggunaan :
  strpos(Jarum, Jerami); //istilahnya jarum dan jerami
*/
  //ayo praktekan
  $kalimat = "Jakarta adalah ibukota negara Indonesia";
  $result = strpos($kalimat, 'ibukota'); //mencari ibukota pada $kalimat
  echo $result;

/*
   Jika strpos() tidak menemukan string yang anda minta,
   maka function akan mengembalikan nilai false.
   Contohnya:
*/
  if ( strpos ( "Jakarta", "haha" ) == false ) {
  echo 'Maaf, tidak ada "haha" di Jakarta';
  }

 ?>
