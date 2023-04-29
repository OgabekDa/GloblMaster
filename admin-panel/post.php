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
    <center><br><br>  
    <div class="col-12">
    <a href="../index.php"><button class="btn btn-primary" type="submit">Bimlasangiz ortga qayting</button></a>
  </div><br>
  <form action="index2.php" method="POST">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Login</label>
    <div class="input-group">
    <input type="text" name="login" class="form-control" id="validationCustom01"  required>
      <div class="input-group-text">@</div>
    </div>
    
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Parol</label>
    <div class="input-group">
      <input type="password" name="parol" class="form-control" id="validationCustom02"  required>
      <div class="input-group-text">&#128584</div>
    </div>
<!--     
    <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Raqam</label>
    <div class="input-group">
    <input type="raqam" name="login" class="form-control" id="validationCustom01"  required>
      <div class="input-group-text">&#128677</div>
    </div> -->
   
  </div>
  <br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Kirish</button>
  </div>
</form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>