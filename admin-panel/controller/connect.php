<?php
$host = "localhost";
$user = "root";
$password = "root";
$databases = "blog";

$connect = mysqli_connect($host, $user, $password, $databases);
if(!$connect){
    die("Error");
}

?>