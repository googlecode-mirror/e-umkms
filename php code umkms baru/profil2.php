<?php
	session_start();
	if (!isset ($_SESSION['register'])){
		header("location: home.php");
		exit();
	}
?>

<html>
<head> <link href="bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>UMKM-SBY</title>
<link rel="shortcut icon" href="favicon1.ico">

</head>

<link rel="stylesheet" type="css/text" href="../bootstrap.css" />
<h1>
<center><img src="header.jpg" /></center>
</h1>

<ul class="nav nav-pills">
  <li class="active"><a href="home2.php">Home</a></li>
  <li class="active"><a href="about2.php">About Us</a></li>
  <li class="active"><a href="artikel2.php">Artikel</a></li>
  <li class="active"><a href="profil2.php">Profil UMKMS</a></li>
  <li class="active"><a href="#">Produk Jual</a></li>
  <li class="active"><a href="kontak2.php">Kontak Kami</a></li>
  <li class="active"><a href="home.php">Logout</a></li>
</ul>
</br>
</br>
<center>
<strong><font size="20">Profil UMKM</font></strong>
</center>
</br>
</br>
<table border=1 bordercolor=black align="center">
<tr>
<td><a href="abp2.php"><img src="abp.jpg" /></a></td> 
<td><a href="dc2.php"><img src="dc.jpg" /></td>
<tr>
<tr>
<td><a href="csp2.php"><img src="csp.jpg" /></a></td> 
<td><a href="dlm2.php"><img src="dlm.jpg" /></td>
</tr>
<tr>
<td><a href="cs2.php"><img src="cs.jpg" /></td>
<td><a href="vp2.php"><img src="vp.jpg" /></td>
</tr>
<tr>
<td><a href="ri2.php"><img src="ri.jpg" /></td> 
<td><a href="wd2.php"><img src="wd.jpg" /></td>
</tr>
</table>
</br>
<center><table width=500 border=1 bordercolor=yellow><tr><td>
<center>
Untuk melihat profil dan informasi dari UMKM yang ada di Surabaya, anda bisa meng-klik 
salah satu logo UMKM tersebut yang ada pada tabel di atas
</center>
</td></tr></table></center>

<body style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>

