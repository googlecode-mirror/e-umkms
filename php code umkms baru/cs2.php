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
  <li class="active"><a href="#">Artikel</a></li>
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
<center><img src="cs1.jpg" /></center>
</br>
<center>
<strong>CinderellaShop</strong></br>
Kantor: Jl. Gubeng Surabaya, Jawa Timur Indonesia</br>
Telepon: 08523555615</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
KAMI adalah Toko online yang menjual Parfum Kw 1 & Kw Super, Parfum Original Singapore, Tester Parfum MURAH & TERLENGKAP ( semua merk parfum ) .
CinderellaShop adalah solusi termudah untuk berbelanja lengkap, menghemat waktu & menghemat uang anda dengan pelayanan yang terbaik.
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="cs2.jpg" />
<img src="cs3.jpg" />
<img src="cs4.jpg" />

<body style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>

