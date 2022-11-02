<?php 

// class smk jp 1
class smkjp1{
    //property
    var $siswa;
    var $guru;

    // function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari(){
        return "berlari seribu langkah";
    }
}

$sekolah = new smkjp1();
$smkjpone = new smkjp1();

$sekolah->guru="pak saipul";
$sekolah->murid="ahmad";
$smkjpone->guru="pak saipul";
$smkjpone->murid="ahmad";

echo $sekolah->guru," ", $sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ", $sekolah->berlari();

//menampilkan objek smkjpone
echo "<br />";
echo $smkjpone->guru," ", $smkjpone->berlari();
echo "<br />";
echo $smkjpone->murid," ", $smkjpone->berdiri();
?>