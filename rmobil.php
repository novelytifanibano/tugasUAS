<!doctype html>
<html lang="en"><!d
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
      $cari=mysqli_query($koneksi,"select * from mobil ") or die (mysqli_error());
      ?>
      <h3> Laporan Data Mobil  </h3>
  <table class="table table-hover">
  <thead>
      <tr>
          <th > NO </th>
          <th> no_polisi</th>
          <th> merk</th>
          <th> tahun</th>
          <th> harga</th>
          
</tr>
</thead>
<tbody>
    <?php
    $no =1;
    while ($data=mysqli_fetch_array($cari)){
        ?>
    <tr>
        <th scope="row"><?php echo $no; ?></th>

        <td><?php echo $data['no_polisi'];?></td>
        <td><?php echo $data['merk'];?></td>
        <td><?php echo $data['tahun'];?></td>
        <td><?php echo $data['harga'];?></td>
     
</tr>
<?php
     $no++;
}
?>
</tbody>
</table>
<a href ="crmobil.php"class="btn btn-primary"> CETAK  </a>

  </body>
</html>