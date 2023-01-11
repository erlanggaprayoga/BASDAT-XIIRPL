<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
            <h3>TAMBAH DATA ANGGOTA</h3>
            </div>
            <div class="card-body">
            <form action="../admin/proses_tambah_anggota.php" method="post">

            <div class="form-group">
                <label>Masukan Nama</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control">
            </div>

            <div class="form-group">
                <label>Masukan No Telp</label>
                <input type="number" name="no_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
            </div>

            <div class="form-group">
                <label>Masukan Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat lengkap" class="form-control">
            </div>

            <div class="form-group">
                <label>Masukan Email</label>
                <input type="text" name="email" placeholder="Masukkan Email Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>Masukan Password</label>
                <input type="text" name="password" placeholder="Masukkan Password Anda" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-warning">CANCEL</button>
            <a href="index.php">Kembali Ke Halaman Admin</a>
            
            </form>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>