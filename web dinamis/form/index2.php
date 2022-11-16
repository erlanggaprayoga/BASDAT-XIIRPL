<html>
    <head>
        <title>Menggunakan Metode Post</title>
    </head>
    <body>
        <h1>Menggunakan Metode POST</h1>
        <form method="POST">
            <!-- Passing data didalam body request tanpa menampilkan secara url -->
            <div>
                <label>Email</label>
                <input type="text" name= "email">
            </div>
            <div>
                <label>password</label>
                <input type="password" name= "password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php 
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "Email = {$email} <br>";
            echo "Password = {$password}";
            ?>
        </form>
    </body>
</html>