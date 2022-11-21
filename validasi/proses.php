<?php 

require 'helper/fungsi-validasi.php';

$rules = [
    'nama' => ['required'],
    'email' => ['required'],
    'username' => ['required'],
    'usia' => ['required'],
];

validasi($rules);

?>