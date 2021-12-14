<?php
include("koneksi.php");
$nopolisi=$_post['txtpolisi'];
$merk=$_post['txtmerk'];
$tahun=$_post['txttahun'];
$harga=$_post['txtharga'];
$kode=$_POST['kode'];
$simpan=mysqli_query($koneksi,"update mobil set no_polis='$nopolisi',merk='$merk',tahun='$tahun',harga='$harga'where id_mobil='$kode' ");
if ($simpan){
    header ("location:index.php?x=mobil");

}