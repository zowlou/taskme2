<?php

require 'model/db.php';

// if($_POST){
    $mysqli = connectdb();

    $stmt = mysqli_prepare($mysqli, "delete from roles where id = ?");

    // Lecture des marqueurs
    mysqli_stmt_bind_param($stmt, "i", $_GET['id']);

    // Exécution de la requête
    mysqli_stmt_execute($stmt);


    header('Location: index.php?p=roles');
    exit();