<?php
require_once '../config/connect.php';
$name = $_GET['title'];
$id = $_GET['id'];
mysqli_query($connect,"UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = '$id'");
header ('Location: ../users.php');