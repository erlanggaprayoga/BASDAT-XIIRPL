<?php 

// include koneksi
include 'koneksi.php';

// menangkap dat id di kirim dari url
$id_buku = $_GET['id_buku'];

// menghapus data dari table buku
$hapus = mysqli_query($koneksi,"DELETE FROM buku WHERE id_buku = '$id_buku'");

if($hapus){
    ?>
    <script>
        alert('Data Berhasil dihapus');
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