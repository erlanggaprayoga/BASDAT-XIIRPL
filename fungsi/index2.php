<?php 
// function itu ada 2, yang mengembalikan nilai dan ada yang tidak
// array yang berisi 3 nilai
$a = ["merah","kuning","hijau"];

// fungsi dari is null itu mengembalikan nilai bernilai true or false
$fungsi_is_null = is_null($a);


// fungsi dari is array itu mengembalikan apakah array atau tidak
$fungsi_is_array = is_array($a);

// fungsi dari count
$panjang = count($a);

// fungsi mengenkripsi karakter MD5
$enkripsi = md5('sebenernya aku masih sayang sama kamu');

// fungsi dari var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br>";
var_dump($fungsi_is_array);
echo "<br>";
var_dump($panjang);
echo "<br>";
var_dump($enkripsi);


?>