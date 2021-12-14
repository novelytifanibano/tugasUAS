<?php
$koneksi = mysql_connect ("localhost","root","","rental");
if (mysqli_connect_errno()){
echo "koneksi gagal".mysqli_connect_error();
}