<?php

function tes () {
  static $angka = 0; # mendefinisikan variabel lokal

  echo "A: {$angka} <br>";

  $angka++; # increment variabel lokal
}

tes();
tes();
tes();

?>