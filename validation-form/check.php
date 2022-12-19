<?php
    require_once "../config/connect.php";
    $login = strip_tags(trim($_POST['login']));
    $name = strip_tags(trim($_POST['name']));
    $pass = strip_tags(trim($_POST['pass']));

    if(mb_strlen($login) < 3 || mb_strlen($login) > 90) {
        echo "Недопустима довжина логіна";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустима довжина імʼя";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        echo "Недопустима довжина пароля(від 2 до 6 символів)";
        exit();
    }

    $pass = md5($pass);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `name`, `password`) VALUES (NULL, '$login', '$name', '$pass')");

    header('Location: ../index.php');
?>