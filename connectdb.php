<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbeas";

    //create connection to database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
    {
        die("Connection failed" . mysqli_connect_error());
    }
?>