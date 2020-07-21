<?php
    
    include('connectdb.php');
    
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = mysqli_query($conn, "SELECT * FROM admin where username = '$username' and password = '$password'");
    $login = mysqli_num_rows($sql);

    if($login)
    {
        session_start();
        $_SESSION["username"] = $username;
        header("location:template.php");
    }
    else
    {
        header("location:login_dengan_database.php?login_error");
    }
?>