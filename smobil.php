<?php
include("koneksi.php");
$nopolisi=$_post['txtpolisi'];
$merk=$_post['txtmerk'];
$tahun=$_post['txttahun'];
$harga=$_post['txtharga'];
$simpan=mysqli_query($koneksi,"insert into mobil(no_polisi,merk,tahun,harga,s_mobil) values ('$nopolisi','$merk','$tahun','$harga','$AKTIF')") or die (mysqli_error());
if ($simpan){
    header ("location:index.php?x=mobil");

}