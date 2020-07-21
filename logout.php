<?php
    session_start();

    session_destroy();

    header("location:login_dengan_database.php");
?>