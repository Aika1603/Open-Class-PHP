<?php
// cara deklarasi array multidimensi
// deklarasi $meja yang memiliki beberapa array sebagai elemennya
$meja = array(
   array('gunting', 'pulpen'), //array elemen ke 1, tapi index ke 0
   array('handphone', 'earphone'), //array elemen ke 2, tapi index ke 1
   array('kue', 'minuman') //array elemen ke 3, tapi index ke 2
 );

// ayo kita akses array diatas.
// anggap setiap baris/array di $meja adalah sebuah laci
// kita akses laci ketiga, benda pertama
echo $meja[2][0];
echo "<br/>";
// kita akses laci kedua, benda kedua
echo $meja[1][1];
echo "<br/>";


 ?>
