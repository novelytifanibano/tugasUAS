<?php
include("koneksi.php");
$kode=$_POST['kode'];
$nama=$_post['txtnama'];
$kelamin=$_post['kelamin'];
$username=$_post['txtusername'];
$password=$_post['txtpassword'];
$level=$_post['level'];
$simpan=mysqli_query($koneksi,"update admin set nama_admin='$nama',jenkel_admin='$kelamin',username='$username',password='$password',level='$level'where id_admin='$kode' ") or die (mysqli_error());
if ($simpan){
    header ("location:index.php?x=admin");

}
