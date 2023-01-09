<?php
session_start();
include '../koneksi.php';

// menangkap data yang dikirim dari login 
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data dan dicocokan pada table admin xampp
$data = mysqli_query($koneksi,"SELECT * FROM anggota WHERE email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek_data = mysqli_num_rows($data);

if ($cek_data > 0){
    $_SESSION['email']=$email;
    $_SESSION['status']='login';
    header("location:index.php");
}else{
    header("location:login.php?pesan=gagal");
}

?>