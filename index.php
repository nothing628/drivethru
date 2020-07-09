<?php

require_once('connection.php');

ob_start();
include('views/header.php');
echo "Hi world";
echo $MYSQL_USER;
include('views/footer.php');
ob_end_flush();
