<?php 
// include koneksi

include 'koneksi.php';

// menangkap data yang ada dalam form
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// menginput database

mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nama','$no_telp','$alamat','$email','')");

// mengembalikan kehalaman awal
header("location:tambah.php");
?>