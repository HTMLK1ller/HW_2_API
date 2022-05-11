<?php
    require_once '../config/connect.php';
    $name = $_POST['title'];

    mysqli_query($connect,"INSERT INTO `city` (`id`, `name`) VALUES (NULL, '$name')");

    header ('Location: ../index.php');
