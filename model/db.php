<?php

function connectdb()
{
    $host = "127.0.0.1";
    $user = 'root';
    $password = '';
    $database = 'TASKME';
    $port = 3306;

    $mysqli = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

    return $mysqli;
}

connectdb();