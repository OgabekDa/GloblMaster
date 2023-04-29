<?php
require_once('Connect.php');

$title = $_POST['title'];
$slogn = $_POST['slogn'];
$text = $_POST['text'];

if(isset($title)){
    $sql = "INSERT INTO `home-page` (`id`, `title`) VALUES (NULL, '$title');";
    mysqli_query($connect, $sql);
    header("Location: ../vievs/home-page.php");
}


if(isset($slogn)){
    $sql_slogn = "INSERT INTO `home-page-slogn` (`id`, `slogn`, `text`) VALUES (NULL, '$slogn', '$text');";
    mysqli_query($connect, $sql_slogn);
    header("Location: ../vievs/home-page.php");
}




?>