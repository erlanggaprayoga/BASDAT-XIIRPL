<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form">
            <h1>Tambah Buku</h1>
            <form action="proses.php" method="post">
            <label>Masukan Id Katalog</label>
            <input type="number" name="id_katalog" placeholder="Masukan ID Katalog">
            <br>
            <label>Masukan Judul Buku</label>
            <input type="text" name="judul_buku" placeholder="Masukan Judul Buku">
            <br>
            <label>Masukan pengarang</label>
            <input type="text" name="pengarang" placeholder="Masukan Pengarang Buku">
            <br>
            <label>Masukan Tahun Terbit</label>
            <input type="date" name="thn_terbit">
            <br>
            <label>Masukan penerbit</label>
            <input type="text" name="penerbit" placeholder="Masukan Penerbit Buku">
            <br>
                <input type="submit" value="submit"></input>
                <br> 
                <input type="reset" value="cancel"></input>
        </form>
    </body>
</html>