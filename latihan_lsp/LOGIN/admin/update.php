<html>
    <head>
        <title>Merubah Data buku</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
            <h3>EDIT BUKU</h3>
            </div>
            <div class="card-body">

            <?php 
            include '../koneksi.php';
            $id_buku = $_GET['id_buku'];
            $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku = '$id_buku'");
            // data yang sudah dicocokan dengan id_buku , di meledak menggunakan fetch array sehingga bisa ditaro satu satu di form nya
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <form action="proses-update.php" method="post">
            <!-- id_buku -->
            <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku']; ?>" >
            <!-- id_buku -->
            <div class="form-group">
                <label>Masukan Id Katalog</label>
                <input type="number" name="id_katalog" placeholder="Masukkan ID Katalog" class="form-control" value="<?php echo $meledak['id_katalog']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan Judul Buku</label>
                <input type="text" name="judul_buku" placeholder="Masukkan Judul Buku" class="form-control" value="<?php echo $meledak['judul_buku']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan pengarang</label>
                <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" class="form-control" value="<?php echo $meledak['pengarang']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan Tahun Terbit</label>
                <input type="date" name="thn_terbit" placeholder="Masukkan Tahun Terbit" class="form-control" value="<?php echo $meledak['thn_terbit']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukkan Penerbit" class="form-control" value="<?php echo $meledak['penerbit']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan Harga</label>
                <input type="number" name="harga" placeholder="Masukkan Harga" class="form-control" value="<?php echo $meledak['harga']; ?>">
            </div>
            
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-warning">CANCEL</button>
            <a href="index.php">Kembali Ke Halaman Admin</a>
            
            </form>
            <?php 
            }
            ?>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>