<?php 

// array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
// keynya diawali dengan angka 0 dst

// array asosiatif
// keynya berubah menjadi tipe data string

$siswa = [
    // keynya bisa int/string
    'sipalingganteng' => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi',
];

echo "siapa yang paling ganteng? {$siswa['sipalingganteng']} ";

// array multidimension
// ada array didalam array

$togel = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 22],
    [12, 15, 13, 14, 51],
    [19, 21, 31, 47, 35]
];

// cara memanggil array 
echo $togel[2][4];

// array push
// array push berguna untuk menerima 2 parameter,parameter 1 : untuk target, parameter ke2 untuk nilai yang akan ditambahkan
$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// cara pertama untuk menambahkan item
array_push($buah, 'timun');
// cara kedua

$sayur[] = 'labu';

echo $sayur[3];
echo $buah[3];
?>