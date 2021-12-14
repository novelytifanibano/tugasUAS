<?php
include("koneksi.php");
$nama=$_post['txtnama'];
$kelamin=$_post['kelamin'];
$username=$_post['txtusername'];
$password=$_post['txtpassword'];
$level=$_post['level'];
$simpan=mysqli_query($koneksi,"insert into admin(nama_admin,jenkel_admin,username,password,level) values ('$nama','$kelamin','$username','$password','$level')")or die (mysqli_error());
if ($simpan){
    header ("location:index.php?x=admin");

}