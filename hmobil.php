<?php
include("koneksi.php");
$id=$_get['id'];
$hapus=mysqli_query($koneksi,"delete from admin where id_mobil='$id'") ;
if($hapus){
    header("location:index.php?x=mobil");
    
}