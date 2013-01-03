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
  <li class="active"><a href="products.php">Produk Jual</a></li>
  <li class="active"><a href="kontak2.php">Kontak Kami</a></li>
  <li class="active"><a href="home.php">Logout</a></li>
</ul>
</br>
</br>
<center>
<strong><font size="20">Selamat Datang di “Web UMKM Surabaya”</font></strong>
</center>
</br>
</br>


<center>
<table width=250 border=3 bordercolor=black style="border-collapse:collapse"><tr><td>
<font size=+2 face="arial" color=magenta> <marquee direction=down loop=true height="20">
Media Promosi Online
</marquee> </font>
</td></tr></table>
</br>
</br>
</center>

<center>
<table width=900 border=3 bordercolor=yellow style="border-collapse:collapse"><tr><td>
<center>
Web UMKM Surabaya ialah media promosi online untuk produk produk UMKM di wilayah Surabaya. 
Disini kami menghadirkan untuk memberikan solusi bagi anda yang terkendala dengan masalah promosi. 
Oleh karena itu, kami memberikan sarana untuk mempromosikan produk produk UMKM untuk para pelaku UMKM di Surabaya. 
Dengan begitu, kami harapkan dapat membantu mengenalkan produk produk tersebut ke seluruh Indonesia. 
Sudah saatnya UMKM Berjaya di negeri sendiri, sehingga kita bersama – sama siap untuk menghadapi perdagangan bebas yang aka masuk ke Indonesia. 
Sudah saatnya pula untuk memperluas pemasaran produk UMKM sehingga dapat menambah omzet penjualan dan dapat semakin dikenal oleh seluruh warga Indonesia
</center>
</td></tr></table>
</center>
</br>

<body style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>

</body>  
</html>

