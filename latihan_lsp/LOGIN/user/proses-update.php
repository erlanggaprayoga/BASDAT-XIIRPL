<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// menginput database
$input = mysqli_query($koneksi,"UPDATE anggota SET nama='$nama',no_telp='$no_telp',alamat='$alamat' WHERE id_anggota='$id_anggota' ");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil dirubah');
        window.location = "index.php"
    </script>

    <script>
        alert('data gagal dirubah');
        window.location = "index.php";
    </script>
    <?php
}
?>