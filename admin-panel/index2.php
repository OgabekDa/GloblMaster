<?php
session_start();
require_once("controller/connect.php");
$_SESSION['login'] = $_POST['login'];
$_SESSION['parol'] = $_POST['parol'];

$login_s= $_SESSION['login'];
$parol_s = $_SESSION['parol'];
  

$sql = "SELECT * FROM `kirish`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

$alth = false;


foreach ($data as $value) {
  if (($value[1] == $login_s and $value[2] ==$parol_s)) {
    $alth = true; 
  }
}
if(!$alth)
{
  header("Location: post.php");
}else{
  
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
  <a href="../index.php">
  <button type="button" class="btn btn-primary"><h1>Ortga</h1></button>
    </a>
<br><br><br>
<div class="container">
  <center>
    
  <a href="vievs/home-page.php">
  <button type="button" class="btn btn-primary"><h1>HOME</h1></button>
    </a>

<a href="vievs/works.php">
  <button type="button" class="btn btn-success"><h1>WORKS</h1></button>
</a>
<a href="">
<button type="button" class="btn btn-warning"><h1>ABOUT</h1></button>
</a> 

  </center><br>
  <center>
    
<a href="vievs/our-service.php">
  <button type="button" class="btn btn-success"><h1>HIRE US</h1></button>
</a>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <h1>Contact</h1>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Malumotlar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><?php
      $sql_up = "SELECT * FROM `contact`";
      $data_up = mysqli_query($connect, $sql_up);
      $data_up = mysqli_fetch_all($data_up);
      foreach($data_up as $value): ?>
      <div class="modal-body">
      <div class="mb-3">
        <form action="controller/contakt.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $value[0] ?>">
    <label for="title">Manzilingizni</label>
  <input type="text" name="adres" id="title" class="form-control" aria-label="file example" required value="<?= $value[3]; ?>">     
  <label for="title">Telefon raqamingiz</label>
  <input type="number" name="tel" id="title" class="form-control" aria-label="file example" required value="<?= $value[2]; ?>">     
  <label for="title">Elektron pochtangiz</label>
  <input type="email" name="email" id="title" class="form-control" aria-label="file example" required value="<?= $value[1]; ?>">     
  <label for="title">Contact menyusidagi rasimni o'zgartirish</label>
  <input type="file" name="img" id="title" class="form-control" aria-label="file example" required value="<?= $value[4]; ?>">     
  <div class="modal-footer">
       
       <button type="submit" class="btn btn-primary">Understood</button>
     </div>
</div>
      </form>
      </div>

 <?php endforeach; ?>
      </div>
      
    </div>
  </div>
</div>


  </center><br>
  <center>
  <a href="index.php">
  <button type="button" class="btn btn-primary"><h1>LOGINNI OZGARTIRISH</h1></button>
    </a><br>

  


  <div class="logo">
        <a href="admin_panel/index2.php">
          <img src="../assets/img/" class="img-thumbnail" alt="logo platz" height="500" width="500">
        </a>
      </div>
  </center>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>