<?php
    require_once '../config/connect.php';
    $name = $_POST['title'];
    $id = $_POST['id'];
    mysqli_query($connect,"UPDATE `city` SET `name` = '$name' WHERE `city`.`id` = '$id'");
    header ('Location: ../index.php');
