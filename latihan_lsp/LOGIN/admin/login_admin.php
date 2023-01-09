<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class = "admin">
            <h1>Login Aplikasi</h1>
            <form action="proses_admin.php" method="post">
            <table>
                <tr>
                    <td>Admin</td>
                    <td>:</td>
                    <td><input type="text" name="admin" id="admin" placeholder="nama"></td>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password" placeholder="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
                <td>Kembali Ke <a href="../index.php">Halaman Utama</a> </td>
            </table>
        </form>
        
    </div>
    </body>
</html>