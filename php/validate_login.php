<?php
    include ('db_connect.php');
    // print_r($_POST);
    $pwd = md5($_POST['pwd']);
    $sql_lg = "SELECT  `username`, `password` FROM `omdb_user` 
    WHERE username='".$_POST['user']."' AND password='".$pwd."' ";
    $query = mysqli_query($conn, $sql_lg) or die("Error : ". mysqli_error($conn));
    $fetch = mysqli_fetch_assoc($query);
    print_r($fetch);
    $num_rows = mysqli_num_rows($query);
    if (empty($num_rows)) {
        echo "username หรือ password ไม่ถูกต้อง";
    } else {
        session_start(); 
        $_SESSION['sessuser'] = $fetch['username'];
        header("Location: ../index.php");
    }
    print_r($_SESSION);
    