<?php
// include koneksi
include '../koneksi.php';

// menangkap data yang ada di form
$id_katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

// menginput database
$input = mysqli_query($koneksi,"insert into buku values('','$id_katalog','$judul_buku','$pengarang','$thn_terbit','$penerbit','$harga')");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil');
        window.location = "index.php"
    </script>

    <script>
        alert('data gagal');
        window.location = "index.php";
    </script>
    <?php
}
?>