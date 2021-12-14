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
      session_start();
      if($_SESSION['level']=="super"){
      include("koneksi.php");
      $cari=mysqli_query($koneksi,"select * from admin ") or die (mysqli_error());
      ?>
  <table class="table table-hover">
  <thead>
      <tr>
          <th scope="col" > NO </th>
          <th scope="col"> nama admin</th>
          <th scope="col"> jenis kelamin</th>
          <th scope="col"> level</th>
          <th> aksi</th>
</tr>
</thead>
<tbody>
    <?php
    $no =1;
    while ($data=mysqli_fetch_array($cari)){
        ?>
    <tr>
        <th scope="row"><?php echo $no; ?></th>

        <td><?php echo $data['no'];?></td>
        <td><?php echo $data['nama_admin'];?></td>
        <td><?php echo $data['jenkel_admin'];?></td>
        <td><?php echo $data['level'];?></td>
        <td>
        <a href ="?x=hadminl&id=<?php echo $data['id_mobil'];?>" class="btn btn-danger"> hapus </a>
        <a href ="?x=eadmin&id=<?php echo $data['id_mobil'];?>" class="btn btn-warning "> ubah </a>
        </td>
</tr>
<?php
     $no++;
}
?>
</tbody>
</table>
<a href ="?x=tadmin"class="btn btn-primary"> tambah </a>
<?php
      }
      else{?>
<script type="text/javascrip">
  alert ("level admin tidak boleh masuk!");
  window.location="index.php";
  
</script>

<?php

      }
      ?>


 
  </body>
</html>