<?php

/**
insertion des rôles dans la DB
*/

require 'model/db.php';

if($_POST){
    $mysqli = connectdb();

    // insérer $_POST['role'] dans la table roles de la db;
    $stmt = mysqli_prepare($mysqli, "insert into roles (libelle) values (?)");

    // Lecture des marqueurs
    mysqli_stmt_bind_param($stmt, "s", $_POST['role']);

    // Exécution de la requête
    mysqli_stmt_execute($stmt);
    header('Location: index.php?p=roles');
    exit();
}

header('Location: index.php?p=roles');