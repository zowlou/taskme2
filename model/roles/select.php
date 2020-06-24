<?php

require 'model/db.php';

// if($_POST){
    $mysqli = connectdb();


    $sql = "select id, libelle from roles";
    $stmt = mysqli_query($mysqli, $sql);

    // tableau numérique
    $result = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
