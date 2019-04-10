<?php
$bahasa = array('PHP', 'JavaScript', 'Python', 'C', 'Java');

// Mencetak elemen 1 dan 3
echo "Sebelum: Elemen 1: $bahasa[0]. Elemen 3: $bahasa[2]. <br/>";

// ubah elemen ke 1
$bahasa[0] = "Ini Bukan PHP";
// ubah elemen ke 3
$bahasa[2] = "Ini Bukan Python";

// Lagi, mencetak elemen 1 dan 3
echo "Sesudah: Elemen 1: $bahasa[0]. Elemen 3: $bahasa[2].";

 ?>
