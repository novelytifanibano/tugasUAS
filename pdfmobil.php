<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>laporan mobil </title>
</head>
<body>

<?php
      include("koneksi.php");
      $cari=mysqli_query($koneksi,"select * from mobil ") or die (mysqli_error());
      ?>
          <h3> Laporan Data Mobil</h3>
          
    <table border="1"cellspacing="0"cellpadding="1" width="100%"> </table>
 
      <tr>
          <th > NO </th>
          <th> no_polisi</th>
          <th> merk</th>
          <th> tahun</th>
          <th> harga</th>
          
</tr>

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
<?php
     $html=ob_get_contents();
     ob_end_clean();
     require_once("html2pdf/html2pdf.class.php");
     $pdf=new HTML2PDF('p','A4','en');
     $pdf->writeHTML($html);
     $pdf->output('laporan mobil.pdf','D');

?>