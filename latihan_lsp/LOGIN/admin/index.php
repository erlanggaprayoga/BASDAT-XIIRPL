<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../user/style3.css">
    </head>
    <br>
        <center> <h3>Halaman Admin</h3> </center> <br>  <hr>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login_admin.php?pesan=belum_login');
        }
        ?>

        <!-- END -->
        <center> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4> </center>

        <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>BUKU YANG TERSEDIA</h2></marquee>
            </div>
            <div class="card-body">
            <!-- menampilkan data buku -->
            <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <a href="add_anggota.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">TAMBAH ANGGOTA</a>
            <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Aksi</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi.php';
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
            <td> 
            <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>  
            <a href="update.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">UBAH</a>  
            </td>
            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
        </div>
        </div>
        </div>
        </body>
</html>