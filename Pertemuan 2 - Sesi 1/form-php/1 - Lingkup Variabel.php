<?php 

$x = 10; // variabel local milik file ini
echo $x;

function tampil() {
	echo $x; // variabel local milik fungsi tampil
}

tampil(); 

# CHALLENGE
# Bagaimana cara menghubungkan variabel x (baris 3) agar dapat ditampilkan dioleh fungsi tampil ? 

?>