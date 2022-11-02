<?php 

// class smk jp 1
class smkjp1{
    //property
    var $kepsek;
    var $siswa;
    var $guru;

    // function berdiri
    function kepala_sekolah(){
        return "kepsek kita adalah";
    }

    function gurujp(){
        return "guru kita adalah";
    }
    function muridjp(){
        return "murid kita adalah";
    }
}

$sekolah = new smkjp1();

$sekolah->kepsek="pak lilik";
$sekolah->guru="pak saipul";
$sekolah->murid="Erlangga";

echo $sekolah->kepala_sekolah()," ",$sekolah->kepsek;
echo "<br />";
echo  $sekolah->gurujp()," ",$sekolah->guru;
echo "<br />";
echo $sekolah->muridjp()," ",$sekolah->murid;

