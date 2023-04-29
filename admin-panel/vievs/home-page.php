<?php
session_start();
require_once("../controller/connect.php");

$sql = "SELECT * FROM `kirish`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

$login_s = $_SESSION['login'];
$kod_s = $_SESSION['parol'];

foreach ($data as $value) {
  if ($value[1] == $login_s and $value[2] == $kod_s) {
    
  }else{
    header("Location: ../post.php");
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <a href="../index2.php">
<button type="button" class="btn btn-danger">ORTGA</button>
</a>
<div class="container">   
<h3>Home Page</h3>
<!-- Title -->
    <form action="../controller/home-page.php" method="POST">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" id="" require><br>
        <input class="btn btn-primary" type="submit" value="OK">
        <hr>
    </form>
    <!-- Slogn -->
    <h3>Slogn & Text</h3>
    <form action="../controller/home-page.php" method="POST">
        <label for="title">Slogn</label>
        <input type="text" id="title" name="slogn" class="form-control" id=""><br>
        <label for="title">Text</label>
        <input type="text" id="title" name="text" class="form-control" id=""><br>
        <input class="btn btn-primary" type="submit" value="OK">
        
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
