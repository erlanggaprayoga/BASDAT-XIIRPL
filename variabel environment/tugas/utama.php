<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " Saya adalah siswa 12 RPL ";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " Desain ";
    function lokal(){
        $skil = "Saya Bisa Coding dan ";
        echo $skil;
    }
    lokal();
    echo $skil;

?>