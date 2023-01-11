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
            <h3>TAMBAH BUKU</h3>
            </div>
            <div class="card-body">
            <form action="proses_tambah.php" method="post">

            <div class="form-group">
                <label>Masukan Id Katalog</label>
                <input type="number" name="id_katalog" placeholder="Masukkan ID Katalog" class="form-control">
            </div>

            <div class="form-group">
                <label>Masukan Judul Buku</label>
                <input type="text" name="judul_buku" placeholder="Masukkan Judul Buku" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Masukan pengarang</label>
                <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Masukan Tahun Terbit</label>
                <input type="date" name="thn_terbit" placeholder="Masukkan Tahun Terbit" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Masukan penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukkan Penerbit" class="form-control">
            </div>

            <div class="form-group">
                <label>Masukan Harga</label>
                <input type="number" name="harga" placeholder="Masukkan harga" class="form-control">
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