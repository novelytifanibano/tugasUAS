<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>RENTAL MOBIL</title>
  </head>
  <body>
      <?php
      include ("koneksi.php");
      session_start();
      if (!isset($_SESSION["username"])){
          header("location:login.php");
      }
      ?>
      
      <div class="container">
      <div class="row">
        <div class ="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">RENTAL MOBIL </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?x=beranda">BERANDA</a>
        </li>
           <li class="nav-item">
           <a class="nav-link" href="?x=order">ORDER</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="?x=mobil">MOBIL</a>
</li>
          <li class="nav-item">
          <a class="nav-link" href="?x=admin">order</a>
</li>

        
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LAPORAN
          </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?x=rmobil">Mobil</a></li>
            <li><a class="dropdown-item" href="?x=rorder">admin</a></li>
</div>
          
        </li>
         <li class ="nav-item">
          <a class="nav-link"href="?x=keluar">keluar</a>
    </li>
      </ul>
      
    
  </div>
</nav>
</div>
</div>

<div class="row mt-3 ">
    <div class="col-md-4">
        <!--sidebar-->
        <h4>mobil ready</h4>
        <ul class="list-group list-group-flush">
        <?php 
           $cari=mysqli_query($koneksi,"select * from mobil where s_mobil='AKTIF'");
           while($data=mysqli_fetch_array($cari)){
        ?>
          <li class="list-group-item"><?php echo $data['merk'];?>
          </li>
          <li class="list-group-item"><?php echo $data['no_polisi'];?></li>
        <?php

       }
       ?>
</ul>
</div>
    <div class ="col-md-8">
    <?php include("kontrol.php");?>
</div>
</div>
    <div class="row mt-3">
    <div class ="col-md-12">
    <p class="text-center font-weight-bold">RENTAL MOBIL&copy;2021 by NOVELY TIFANI BANO </p>
</div>

  </body>
</html>