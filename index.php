<?php
    require_once 'config/connect.php';
    $table_city = mysqli_query($connect,"SELECT * FROM `city`");
    $table_city = mysqli_fetch_all($table_city);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Примитивное API</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>&#9998;</th>
        <th>&#10006;</th>>

    </tr>
    <?php
        foreach ($table_city as $item){
         ?>
            <tr>
                <td><?=$item[0]?></td>
                <td><?=$item[1]?></td>
                <td><a href = "update_page.php?id= <?=$item[0]?>">Обновить</a></td>
                <td><a href = "vendor/delete.php?id= <?=$item[0]?>">Удалить</a></td>
            </tr>
         <?php
        }
    ?>
</table>

<h2>Добавить город<h2>
<form action = 'vendor/create.php' method = 'post'>
    <p>Название</p>
    <input type="text" name="title">
    <button type="submit">Добавить</button>
</form>





</body>
</html>