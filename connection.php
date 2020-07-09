<?php

require_once('config.php');

$mysqli = new mysqli($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASSWORD, $MYSQL_DATABASE, $MYSQL_PORT);

if ($mysqli->connect_errno) {
    die("Tidak bisa terhubung ke database");
}

// $query = "SELECT * FROM users";
// if ($result = $mysqli->query($query)) {
//     $data = $result->fetch_all(MYSQLI_ASSOC);
//     var_dump($data[0]);
// }
