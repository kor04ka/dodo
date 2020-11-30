<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'lesson35');

    $query_db = 'INSERT INTO basket (`name`, `image`, `price`)
               VALUES ("' . $_GET["name"] . '", "' . $_GET["image"] . '", "' . $_GET["price"] . '")';

    $count = mysqli_query ($connect, 'SELECT * FROM basket');

    while ($row = mysqli_fetch_assoc($count)) {
        $row['price'] = $row['price'] + $row['price'];
    }

    mysqli_query($connect, $query_db);

    header('location: index.php');
?>