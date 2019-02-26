<?php
// kali ini kita akan belajar tentang loop dengan while
// apa bedanya dengan loop for?


// Sebuah while akan mengeksekusi code sepanjang kondisi di while benar.
// Sebagai contoh,
// loop di bawah akan melakukan simulasi
// untuk membalikkan koin selama sisi kepala
// tidak muncul tiga kali berturut-turut.

$hitung_kepala = 0;

while ($hitung_kepala < 3) {
	$putar  = rand(0,1); //rand() adalah fungsi acak
	if ($putar == 1){
		$hitung_kepala ++;
		echo "(kepala) ";
	}
	else {
		$hitung_kepala = 0;
		echo "(buntut) ";
	}
}

 ?>
