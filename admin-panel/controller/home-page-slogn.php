<?php
require_once("connect.php");
#home-page
$sql = "SELECT * FROM `home-page` ORDER BY ID DESC LIMIT 1";
$title = mysqli_query($connect, $sql);
$title = mysqli_fetch_all($title);

#home-page-slogn
$sql_slogn = "SELECT * FROM `home-page-slogn`  ORDER BY ID DESC LIMIT 3";
$slogn = mysqli_query($connect, $sql_slogn);
$slogn = mysqli_fetch_all($slogn);



?>