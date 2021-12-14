<!doctype html>
<html lang="en">
  <head>
   
    <title> Laporan Data Mobil</title>
  </head>
  <body style="padding:50px;" onload="window.print()">
  <?php
      include("koneksi.php");
      $cari=mysqli_query($koneksi,"select * from mobil ") or die (mysqli_error());
      ?>
      <h3 class="text-center"> Laporan Data Mobil  </h3>
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
<a href ="pdfmobil.php"class="btn btn-primary"> PDF  </a>


   
  </body>
</html>