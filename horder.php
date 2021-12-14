<?php
include("koneksi.php");
$id=$_GET['id'];
$hapus=mysqli_query($koneksi,"delete from sewa where id_sewa='$id'") or die (mysqli_error());
if($hapus){
    header("location:index.php?x=order");
    
}