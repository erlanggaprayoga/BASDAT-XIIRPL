<?php 

// include koneksi
include 'koneksi.php';

// menangkap dat id di kirim dari url
$id_buku = $_GET['id_buku'];

// menghapus data dari table buku
mysqli_query($koneksi,"DELETE FROM buku WHERE id_buku = '$id_buku'");

// mengalihkan ke tampilan awal
header("location:index.php");

?>