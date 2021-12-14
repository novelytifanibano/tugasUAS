<?php
include("koneksi.php");
$id=$_get['id'];
$hapus=mysqli_query($koneksi,"delete from admin where id_admin='$id'") or die (mysqli_error());
if($hapus){
    header("location:index.php?x=admin");
    
}