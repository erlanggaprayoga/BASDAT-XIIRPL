<?php
session_start();
include '../koneksi.php';

// menangkap data yang dikirim dari login 
$username = $_POST['admin'];
$password = $_POST['password'];

// menyeleksi data dan dicocokan pada table admin xampp
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek_data = mysqli_num_rows($data);

if ($cek_data > 0){
    $_SESSION['admin']=$username;
    $_SESSION['status']='login';
    header("location:index.php");
}else{
    header("location:login_admin.php?pesan=gagal");
}

?>