<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'lesson35');

    $db_query = "DELETE FROM basket WHERE id={$_GET['id']}";

    $query = mysqli_query($connect, $db_query);

    header('location: index.php');
?>