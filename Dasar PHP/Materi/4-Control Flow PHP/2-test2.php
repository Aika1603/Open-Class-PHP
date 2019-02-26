<?php

/*
Bagaimana menjalankan 
if ($i == 1 ||
    $i == 2 ||
    $i == 3) {
 echo '$i bernilai diantara 1 dan 3.';
}
dengan switch?

*/


$i = 5;

switch ($i) {
        case 0:
            echo '$i bernilai 0.';
            break;
        case 1:
        case 2:
        case ?:
        case ?:
        case 5:
            echo '$i bernilai diantara 1 dan 5.';
            break;
        case ?:
        case 7:
            echo '$i bernilai 6 atau 7.';
            break;
        default:
            echo "Saya tidak tahu nilai dari \$i.";
}

?>