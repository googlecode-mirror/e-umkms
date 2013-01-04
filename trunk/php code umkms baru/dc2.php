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
<marquee direction=down loop=true height="50"><center><img src="header.jpg" /></center></marquee>
<script type="text/javascript">
function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{
	return (Value > 9) ? "" + Value : "0" + Value;
}

</script>
<font id="ur" size="6" face="Trebuchet MS, Verdana, Arial, sans-serif" color=pink></font>
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
<strong><font size="20">Profil UMKM</font></strong>
</center>
</br>
</br>
<center><img src="dc1.jpg" /></center>
</br>
<center>
<strong>Don Collo Furniture</strong></br>
Kantor: Jl. Wiguna Tengah, Surabaya</br>
Kontak: Tn.Didiet</br>
Telepon: 08155011182; 081337522345</br>
Fax: 62318796768</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
Don Collo Furniture memproduksi segala macam pesanan mebel : Kitchen set ( Rak Dapur) , Pantry, Mini Bar, Bed, Almari Pakaian / Wardrobe, 
Dining set, Sofa, Divider, Counter, Wall Panel/ Backdrop, dll dengan berbagai style : Klasik, Minimalis atau Kontemporer. 
Selain mebel kami juga memasarkan FLOORING berbahan dasar HDF Grade AC5. Kami melayani pesanan untuk Rumah Tinggal / perorangan, hotel, 
restoran, kantor, toko, dsb. Dapatkan produk Berkualitas Tinggi dari kami dengan harga yang sangat Kompetitif dan Layanan Prima.
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="dc2.jpg" />
<img src="dc3.jpg" />
<img src="dc4.jpg" />

<body onload="UR_Start()"  style="background-color:yellow;">
<form method="POST" action="register.php">  
</br>
<center><input type="button" value="Kembali ke Menu Profil UMKM" onclick="window.location='profil2.php'" /></center>
</br>
<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>

