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
<center><img src="wd1.jpg" /></center>
</br>
<center>
<strong>CV. Wahana Data Computer</strong></br>
Jl. Manyar Kartika I / 32, 60118 Surabaya</br>
Telepon: 081 653 0309 / 0877 5666 9898</br>
Fax: 031-593 5788</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
CV. WAHANA DATA adalah perusahaan yang bergerak dibidang distribusi aksesoris komputer dan produksi elektronik,
 produk kami meliputi : Stavol, UPS, Mouse, Keyboard, PSU, Casing, Paper Inkjet, Tinta, dan Speaker Multimedia/ Portable.
Komitmen kami untuk selalu berusaha untuk memberikan pelayanan terbaik kepada pelanggan kami.
Kami memahami bahwa kami ada, karena dukungan dari pelanggan-pelanggan kami.
Untuk kepuasan dan kepercayaan dalam produk kami adalah catatan utama kami. Kami juga mengembangkan 
situs www.wahana-data.com yang didedikasikan kepada konsumen - pelanggan kami untuk memfasilitasi mereka dalam mendapatkan 
informasi produk dan harga, dan pelayanan.
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="wd2.jpg" />
<img src="wd3.jpg" />
<img src="wd4.jpg" />

<body style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>

