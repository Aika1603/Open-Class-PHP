<?php
/*
Operator assignment adalah operator untuk menambahkan,
atau memasukkan sebuah nilai kedalam variabel.


$a = $b; //Assigment dengan Nilai (Assignment by Value)


array($a =>); //Assigment Array
  //membuat array()

$a = &$b; //Assigment dengan Referensi (Assignment by Reference).


*/

$a = 20;
$b = &$a; //seolah-olah saling terikat

echo "$a = $a, $b = $b";
echo "<br />";
// hasil proses: $a = 20, $b = 20

?>
