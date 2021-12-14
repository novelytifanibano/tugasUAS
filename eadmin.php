<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
      <div class="card">
      <h5 class="card-header">ubah data admin </h5>
      <div class="card-body">
      <form method="post"action="?x=uadmin">
          <?php
            include("koneksi.php");
            $id=$_GET['id'];
            $cari=mysqli_query($koneksi,"select*from admin where id_admin='$id'") or die (mysqli_error());
            $data =mysqli_fetch_array($cari);
            ?>
            <input typ='hidden' name="kode"  value="<?php echo $data['id_admin'];?>">
           <div class="form-group">
           <label> Nama Lengkap  </label>
           <input type="text" class="form-control"name="txtnama" value="<?php echo $data['nama_admin'];?>">
 </div>
         <div class="form-group">
         <label> jenis kelamin   </label>
         <select name="kelamin"class="form-control">
         <option value="<?php echo $data['jenkel_admin'];?>"></option>
         <option value="laki-laki">laki-laki</option>
         <option value="perempuan">perempuan</option>
   </select>
   </div>

<div class="form -group">
<label> username</label>
<input type="text" class="form-control" name="txtpassword"value="<?php echo $data['username'];?>">
</div>    
</div>

    <div class="form -group">
    <label> Password </label>
    <input type="password" class="form-control" name="txtpassword"value ="<?php echo $data['password'];?>">
</div>
<div class="form-group">
        <label> level  </label>
        <select name="level"class="form-control">
          <option value="<?php echo $data['level'];?>"></option>
        <option value="admin">admin</option>
        <option value="super">super</option>
   </select>
        <button type="submit" class ="btn btn-primary"> simpan </button>
</div>
</form>
    </div>
</div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>