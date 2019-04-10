<?php
// cara deklarasi array multidimensi dengan array asosiatif
//  misal kita punya array duadimensi seperti di bawah
$array1 = array(
  'ATK' => 'gunting', 'pulpen',
  'elektronik' => 'handphone', 'earphone',
  'cemilan' => 'kue', 'minuman'
  );

//lalu kita tampilkan dengan foreach
foreach($array1 as $data=>$nilai)
{
 echo $data.' : '.$nilai;
};


 ?>
