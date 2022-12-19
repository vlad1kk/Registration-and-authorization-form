<?php
    $connect = mysqli_connect("localhost", "root", "root", "register_bd");
        if (!$connect) {
            die("Помилка підключення до БД");
        }
?>