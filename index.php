<?php

require_once('connection.php');

ob_start();
include('views/header.php');
echo "Hi world";
echo $MYSQL_USER;
echo $_SESSION['start_time']->format('Y-m-d H:i:s');
include('views/footer.php');
ob_end_flush();
