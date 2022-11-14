<?php

$nama = "Nurul Huda"; /* variabel global */

function haloDunia () {
  $nama = "Wahid Abdullah"; # variabel lokal
  echo $nama . '<br>'; # Wahid Abdullah
}

haloDunia();

echo $nama; # Nurul Huda