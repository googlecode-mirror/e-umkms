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
  <li class="active"><a href="#">Profil UMKMS</a></li>
  <li class="active"><a href="#">Produk Jual</a></li>
  <li class="active"><a href="kontak2.php">Kontak Kami</a></li>
  <li class="active"><a href="home.php">Logout</a></li>
</ul>
</br>
</br>
<center>
<strong><font size="20">Kontak Kami�</font></strong>
</center>
</br>
</br>

<center>
<table width=500 border=3 bordercolor=yellow style="border-collapse:collapse"><tr><td>
<center>Untuk mempermudah anda dalam menghubungi kami, kami memberikan informasi mengenai kontak dari masing masing tim developer 
sehingga dapat melakukan komunikasi dengan kami secara mudah, berikut :
</br>
</br>
<table width=300 border=3 bordercolor=magenta style="border-collapse:collapse"><tr><td>
<center>
Prima	: 083857008000 </br>
Danis	: 085733577739 </br>
Putri : 087853358866 </br>
</center>
</td></tr></table>
 
</center>
</td></tr></table>
</center>
</br>

<body style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>

