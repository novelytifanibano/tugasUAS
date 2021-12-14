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
  <?php
            include("koneksi.php");
            $id=$_GET['id'];
            $cari=mysqli_query($koneksi,"select * from mobil where id_mobil='$id'");
            $data =mysqli_fetch_array($cari);
            ?>
      <div class="card">
      <h5 class="card-header"> ubah data mobil </h5>
      <div class="card-body">
      <form method="post"action="?x=umobil">
          <input type="hidden"name="kode" value ="<?php echo $data['id_mobil'];?>">
        
          <div class="form-group">
          <label> no polisi  </label>
          <input type="text" class="form-control"name="txtpolisi" value ="<?php echo $data['no_polisi'];?>">
         
 </div>
 <div class="form-group">
          <label> merk  </label>
          <input type="text" class="form-control"name="txtmerk"value ="<?php echo $data['merk'];?>">
 </div>
 <div class="form -group">
    <label> tahun </label>
    <input type="text" class="form-control" name="txttahun" value ="<?php echo $data['tahun '];?>"> 
     
</div>

    <div class="form -group">
    <label> harga </label>
    <input type="harga" class="form-control" name="txtharga"value ="<?php echo $data['harga'];?>">
</div>

<button type="submit" class ="btn btn-primary"> simpan </button>
</form>
</div>

    </div>
</div>

  </body>
</html>