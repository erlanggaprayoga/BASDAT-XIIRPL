<?php 

require 'helper/fungsi-validasi.php';

// tambahkan rules masing masing jenis form nya 

$rules = [
    'nama' => ['required'],
    'email' => ['required','email'],
    'username' => ['required','username'],
    'usia' => ['required','numeric']
];

$errors = validasi($rules);

// echo "<pre>";
// print_r($errors);
// echo "</pre>";

// disini kita bisa melakukan proses yang harus dilakukan 
// jika tidak terjadi error validasi apapun

if (count($errors) > 0 ) {
    $time = $_REQUEST;
    $querystring = http_build_query ([
        'errors' => $errors,
        'time' => $time

    ]);

    header("location: form.php?{$querystring}");
    die();
}

?>