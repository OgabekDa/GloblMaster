<?php 
require_once("admin-panel/controller/connect.php");
$login = $_POST['login'];
$parol = $_POST['parol'];



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
    <div class="container">
    <h1>Admin panel</h1>
    <form action="controller/nav.php" method="POST">
    <select class="form-select" aria-label="Default select example" name="nav">
        <option selected>Ozingizga kerak bolgan sahifa tanlang</option>
        <option value="1">Bosh sahifa</option>
        <option value="2">Works</option>
        <option value="3">Kontatkt</option>
    </select><br>
    <input class="btn btn-primary" type="submit" value="OK">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
