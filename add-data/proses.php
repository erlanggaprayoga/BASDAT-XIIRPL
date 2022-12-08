<?php 
// cek button, sudah terpencet atau belum
if($_POST['submit'] == 'submit'){
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
}

// validasi data kosong
if(empty($_POST['nama'])||empty($_POST['no_telp'])||empty($_POST['alamat'])||empty($_POST['email'])) {
    ?>
    <!-- warning -->
    <script lang="javascript">
        alert('Data Harus Dilengkapi Yah');
        document.location='tambah.php';
    </script>
    <?php 
}else{
    include 'koneksi.php';
}

// fungsi input ke tablenya yah
$input = "INSERT INTO anggota VALUES ('','$nama','$no_telp','$alamat','$email','')";

$query_input = mysqli_query($koneksi,$input);

// cek data masuk atau tidak 
if($query_input){
    // jika sukses
    ?>
    <script lang="javascript">
        alert('BERHASIL!!!')
    </script>
    <?php
}else{
    // jika gagal
    echo "input data tidak  berhasil silahkan input data kembali yah";
}

?>