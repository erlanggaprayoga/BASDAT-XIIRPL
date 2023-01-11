<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$nama = $_POST['nama'];
$telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pass = $_POST['password'];

// menginput database
$input = mysqli_query($koneksi,"insert into anggota values('','$nama','$telp','$alamat','$email','$pass')");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil');
        window.location = "login_admin.php"
    </script>

    <script>
        alert('data gagal');
        window.location = "index.php";
    </script>
    <?php
}
?>