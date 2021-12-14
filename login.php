<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login sistem </title>
  </head>
  <body>
     <div class ="container mt-3">
     <div class="row">

    <div class ="col">
      <div class="card w-50 mx-auto">
      <h5 class="card-header">Halaman Login </h5>
      <div class="card-body">
      <form method="post"action="masuk.php">
  <div class="form-group">
    <label> username </label>
    <input type="text" class="form-control"name="txtusername">
 </div>

  <div class="form -group">
    <label> Password </label>
    <input type="password" class="form-control" name="txtpassword">
</div>

<button type="submit" class ="btn btn-primary"> MASUK </button>
</div>
</form>
    </div>
</div>
  </body>
</html>