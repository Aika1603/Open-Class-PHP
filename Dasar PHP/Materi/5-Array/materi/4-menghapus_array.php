<?php
//andaikan kita punya suatu array
$nada = array("do", "re", "mi", "fa");

//lalu kita hapuskan dia dari ingatan kita
unset($nada[1]);

//maka inilah yang akan terjadi

// "do" |      | "mi" |  "fa"
//   0  |   1  |   2  |    3

//posisi dia tetap ada, namun dia hilang dari posisinya.
//posisinya tak tergantikan sampai ada orang lain yang cocok :(.

 ?>
