<?php
$nav = $_POST["nav"];

if($nav==1){
    header('Location: ../vievs/home-page.php');
}elseif($nav==2){
    header("Location: ../vievs/works.php");
}


?>