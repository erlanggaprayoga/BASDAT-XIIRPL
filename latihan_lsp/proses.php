<?php 
// include koneksi

include 'koneksi.php';

// menangkap data yang ada dalam form
$id_katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

// menginput database

$notif = mysqli_query($koneksi,"INSERT INTO buku VALUES('','$id_katalog','$judul_buku','$pengarang','$thn_terbit','$penerbit')");
if($notif){
    ?>
    <script>
        alert('Data Berhasil');
        window.location='tambah.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal');
        window.location='tambah.php';
    </script>
    <?php
}


?>