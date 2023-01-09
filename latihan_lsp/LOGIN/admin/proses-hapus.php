<?php
// include koneksi

include '../koneksi.php';
// menangkpa data id yanag di kirim dari url
$id_buku = $_GET['id_buku'];

// menghapus data dari table buku ya
$input = mysqli_query($koneksi,"delete from buku where id_buku='$id_buku'");

// mengalihkan ke tampilan awal ya
if($input){
    ?>
    <script>
        alert('berhasil hapus');
        window.location = "index.php";
    </script>

    <script>
        alert('gagal hapus');
        window.location = "index.php";
    </script>
    <?php
}
?>