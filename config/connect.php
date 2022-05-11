<?php
$connect = mysqli_connect('localhost', 'root', '1939939', 'HW_1');
if (!$connect) {
    die('Не удалось подключиться к базе данных');
} else {
    print_r('Соединение установлено');
}