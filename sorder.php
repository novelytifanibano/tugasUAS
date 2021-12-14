<?php
include"koneksi.php";
$nopolisi=$_post['polisi'];
$nama=$_post['txtnama'];
$jenkel=$_post['jenkel'];
$ktp=$_post['txtKTP'];
$alamat=$_post['txtAlamat'];
$tlp=$_post['txtTlp'];
$tujuan=$_POST['txttujuan'];
$mulai=new datetime($_post['txtMulai']);
$selesai= new datetime($_post['txxSelesai']);
$selisih=$selesai->diff($mulai);
$x=$selisih->d;
$cari=mysqli_query($koneksi,"select * from mobil where id_mobil='$polisi'");
$data=mysqli_fetch_array($cari);
$harga=$x*$data['harga'];
$simpan=mysqli_query($koneksi,"insert into sewa(id_mobil,id_admin,nama_sewa,ktp,jenkel_sewa,alamat,tlp_sewa,tujuan,tgl_sewa,tgl_kembali,lama,harga_total) values ('$polisi','$_session[id_admin]','$nama','$ktp','$jenkel','$alamat','$tlp','$tujuan','$_POST[txtmulai]','$_post[txtselesai]','$x','$harga')")or die (mysqli_error());
if ($simpan){
header ("location:index.php?>=order");
}
