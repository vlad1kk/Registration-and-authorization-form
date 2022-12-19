<?php
    require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $pass = strip_tags(trim($_POST['pass']));

    $pass = md5($pass);

    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
    $user = mysqli_fetch_assoc($result);
     if(count($user) == 0){
        echo "Такий користувач не знайдений";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    header('Location: ../index.php');
    
?>