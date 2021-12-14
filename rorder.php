<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</body>
</html>

  
  </head>
  <body>
      <?php
      include("koneksi.php");
      $cari=mysqli_query($koneksi,"select * from mobil,sewa where mobil.id_mobil=sewa.id_sewa") or die (mysqli_error());
      ?>
      <h3> laporan order mobil</h3>
  <table class="table table-hover">
  <thead>
      <tr>
          <th > NO </th>
          <th> no_polisi</th>
          <th>merk</th>

          <th> nama peminjam</th>
          <th> tujuan pinjam</th>
          <th> tgl mulai sewa</th>
          <th> tgl selesai sewa</th>
          <th> total harga</th>
        
         
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
        <td><?php echo $data['nama_sewa'];?></td>
        <td><?php echo $data['tujuan'];?></td>
        <td><?php echo $data['tgl_sewa'];?></td>
        <td><?php echo $data['tgl_kembali'];?></td>
        <td><?php echo $data['lama'];?></td>
        <td><?php echo $data['harga_total'];?></td>
        <td>
        <a href ="?x=hsewa&id=<?php echo $data['id_sewa'];?>" class="btn btn-danger"> hapus </a>
    
        </td>
</tr>
<?php
     $no++;
}
?>
</tbody>
</table>
<a href ="?x=crorder.php"class="btn btn-primary"> cetak </a>
<a href ="?x=crorder.php"class="btn btn-primary"> PDF </a>
    
  </body>
</html>