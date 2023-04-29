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
<h3>Our Service</h3>
<!-- Title -->
    <form action="../controller/our-service.php" method="POST">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" id="" require><br>
        <input class="btn btn-primary" type="submit" value="OK">
        <hr>
    </form>
</div>
</body>
</html>
