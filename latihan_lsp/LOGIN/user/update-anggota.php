<html>
    <head>
        <title>Merubah Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
            <h3>EDIT Profile</h3>
            </div>
            <div class="card-body">

            <?php 
            include '../koneksi.php';
            // Ambil Dari Tombol edit
            $id_anggota = $_GET['id_anggota'];
            $data = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
            // data yang sudah dicocokan dengan id_anggota , di meledak menggunakan fetch array sehingga bisa ditaro satu satu di form nya
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <form action="proses-update.php" method="post">
            <!-- id_anggota -->
            <input type="hidden" name="id_anggota" value="<?php echo $meledak['id_anggota']; ?>" >
            <!-- id_anggota -->
            <div class="form-group">
                <label>Masukan Nama</label>
                <input type="text" name="nama" placeholder="Masukkan ID Nama" class="form-control" value="<?php echo $meledak['nama']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan No.Telp</label>
                <input type="number" name="no_telp" placeholder="Masukkan no telp" class="form-control" value="<?php echo $meledak['no_telp']; ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" value="<?php echo $meledak['alamat']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan Email</label>
                <input type="text" name="email" placeholder="Masukkan Email" class="form-control" value="<?php echo $meledak['email']; ?>" disabled>
            </div>

            <div class="form-group">
                <label>Masukan Password</label>
                <input type="text" name="password" placeholder="Masukkan Password" class="form-control" value="<?php echo $meledak['password']; ?>" disabled>
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