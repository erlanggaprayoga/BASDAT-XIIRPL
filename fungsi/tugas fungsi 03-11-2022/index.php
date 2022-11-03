<?php 
function kalimat($nama,$jumlah,$angka){
    echo "<h2> saat aku menggunakan {$nama} </h2>";
    echo "<h2> aku gunakan {$jumlah} satu lembar !</h2>";
    echo "<h2> {$jumlah} harganya {$angka} </h2>";

}

kalimat('tisu','satu lembar','2000');

$a = ["saat","aku","menggunakan","tisu"];
$b = ["aku","gunakan","satu","lembar","satu","lembar"];
$c = ["satu","lembar","harganya","2000"];

$kalimat1 = count($a);
$kalimat2 = count($b);
$kalimat3 = count($c);

var_dump($kalimat1);
echo "<br>";
var_dump($kalimat2);
echo "<br>";
var_dump($kalimat3);

?>