<?php


if(isset($_POST['title']) and isset($_FILES['img'])){
    function add_works(){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $img = time()."-".$_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        require_once("connect.php");
        echo "ok";
        $sql = "INSERT INTO `works` (`id`, `title`, `description`, `img`) VALUES (NULL, '$title', '$description', '$img');";
        move_uploaded_file($img_tmp, "../../assets/img/" . $img);
        return mysqli_query($connect, $sql);
    }
    add_works();
    header("Location: ../vievs/works.php");
}


?>