<?php
include"conn.php";
include"functionweb.php";

$a = new functionWEB;
$a->edit();
if($a){
header('location:lihat.php');
}
else{
echo"Daftar Gagal Diupdate<br>
<a href=lihat.php>Laporan Transaksi</a>";
}
?>