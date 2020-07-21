<html>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  

    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <?php
        if(isset($_GET["login_error"]))
        {
            echo "<h5 class='mt-5 mx-auto text-center' style='color:red';>Username atau password salah</h5>";
        }
    ?>
    <body>
        <div class="container border mt-3">
            <h1 class="text-center mt-2">LOGIN</h1>
            <form action="validasi_user.php" method ="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
    

</html>