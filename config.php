<?php

$MYSQL_DATABASE = "drivethru";
$MYSQL_USER = "drivethru";
$MYSQL_PASSWORD = "secret";
$MYSQL_PORT = 3307;
$MYSQL_HOST = "127.0.0.1";

session_start();

if (!isset($_SESSION['start_time'])) $_SESSION['start_time'] = new DateTime();
