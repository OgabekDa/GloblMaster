<?php
require_once("connect.php");
$title = $_POST['title'];


$sql="INSERT INTO `our-servce` (`id`, `name`) VALUES (NULL, '$title');";
mysqli_query($connect, $sql);
header("Location: ../vievs/our-service.php");



?>