<?php

    session_start();

    $con = mysqli_connect('localhost','root','osk2009#');

    mysqli_select_db($con,'login_register');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from users where name = '$name' && password = '$pass'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
        header('location:home.php');
    }
    else{
        header('location:index.php');
    }

?>