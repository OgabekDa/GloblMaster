<?php
require_once("connect.php");
$adres = $_POST['adres'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$id=$_POST['id'];

$img =time()."-". $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

move_uploaded_file($img_tmp, "../../assets/img/" .$img);

$sql_del="DELETE FROM `contact` WHERE `contact`.`id` = $id";
mysqli_query($connect, $sql_del);

$sql="INSERT INTO `contact` (`id`, `email`, `phone`, `adres`, `fon`) VALUES (NULL, '$email', '$tel', '$adres', '$img');";
mysqli_query($connect, $sql);
header("Location: ../index2.php");



?>