<?php

// variabel lokal hanya bisa diakses dari scope dimana dia di definisikan
$nama = " guanteng bingitzzz";

function haloDunia () {
  $nama = "Pak Saiful";
  echo $nama; /* error karena variabel $nama dalam fungsi haloDunia() bersifat lokal */
}

haloDunia(); /* panggil fungsi haloDunia() */
echo $nama; /* error karena variabel $nama dalam fungsi haloDunia() bersifat lokal */

?>
