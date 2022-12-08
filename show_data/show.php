<html>
    <head>
        <title>show database</title>
    </head>
    <body>
        <h1>menampilkan data anggota</h1>
        <table border="1">
        <tr>
            <th>id_anggota</th>
            <th>nama</th>
            <th>no telepon</th>
            <th>alamat</th>
            <th>email</th>
        </tr>
        <!-- menampilkan data table -->
        <?php 
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_anggota']."</td>";
            echo "<td>".$nama = $row['nama']."</td>";
            echo "<td>".$no = $row['no_telp']."</td>";
            echo "<td>".$alamat = $row['alamat']."</td>";
            echo "<td>".$email = $row['email']."</td>";
            echo "</tr>";
        }
        ?>
        </table>

        <h1>menampilkan data buku</h1>
        <table border="1">
        <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>penerbit</th>
        </tr>
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
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body>
</html>