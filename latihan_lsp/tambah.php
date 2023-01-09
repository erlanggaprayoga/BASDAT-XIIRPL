<!-- <html>
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
        </form> -->
        <html>
            <head>
                <title>Data Buku</title>
                <link rel="stylesheet" href="style.css">
            </head>
                <body>
                    </div>
                    <div class = "data">
                        <!-- menampilkan data buku -->
                        <h1>Buku Tersedia</h1>
                        <table border="1">
                <button><a href="add.php">Tambah Buku </a></button>
                <br>
        <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Aksi</th>
        </tr>
        <br>
            <!-- menampilkan data buku -->
            <?php 
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
                <td><a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']?>">HAPUS</a></td>
            <?php 
            echo "</tr>";
        }
        ?>
    </table>
</div>
    </body>
</html>