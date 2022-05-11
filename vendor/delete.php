<?php
    require_once '../config/connect.php';
    $table_city_id = $_GET['id'];
    mysqli_query($connect,"DELETE FROM `city` WHERE `city`.`id` = '$table_city_id '");
    header ('Location: ../index.php');
