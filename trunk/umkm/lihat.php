<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("location: index.php");
		exit();
	}
?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
a:link {
	color: #0CF;
}
</style>
<div class="page-header">
 <center><h1><font color ="White"><b>E-</font><font color ="yellow">Umkms</font></b><small>|Ecommers-Usaha Mikro Kecil Menengah Surabaya</small></h1></center>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <ul class=" nav nav-list">
      	<li class="nav-header">Menu</li>
      	<li class="#"><a href="index2.php">Home Page</a></li>
		<li class="#"><a href="logout.php">Tentang Kami</a></li>
        <li class="#"><a href="form.php">Form Artikel</a></li>
        <li class="active"><a href="lihat.php">Lihat Artikel</a></li>
        <li class="#"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div style="width:600px;" class="span10">
    <div style="width:900px; height:650px;" class="hero-unit">
    <center>
    <font color=blue>
<h5>Buat Artikel<hr width=400 size=3></h5></font>
<table style="width:800px;" class="table">
<font color=white>
<tr height="25" bgcolor="#0066FF">
<td rowspan="1" valign="middle"><center>Judul Artikel</center></td>
<td rowspan="1" valign="middle"><center>Kategori</center></td>
<td rowspan="1" valign="middle"><center>Deskripsi</center></td>
<td rowspan=1 valign=center align=center>Edit</td>
<td rowspan=1 valign=center align=center>Hapus</td>
</tr>
</font>

<?php
include"conn.php";
$no = 1;

$lihat = mysql_query("SELECT * FROM artikel order by id_hp DESC");
while($a = mysql_fetch_array($lihat)){
echo"
<tr>
<td align=right>$no.</td>
<td align=right>$a[Judul_Artikel]</td>
<td>$a[Kategori]</td>
<td>$a[Deskripsi]</td>
<td align=center><a class=btn btn-primary btn-small href=edit.php?id=$a[id_hp]>Edit</a></li></ul></td>
<td align=center><a class=btn btn-primary btn-small href=\"delete.php?id=$a[id_hp]\">Hapus</a></li></ul></td>
</tr>";
$no++;
}
?>
</table>
<br /><a class="btn btn-primary btn-small" href="form.php">Tambahkan Daftar</a>
</center>
<br />
</div>
</div>
</div>
</div>