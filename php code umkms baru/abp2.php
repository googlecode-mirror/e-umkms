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
<center><img src="abp1.jpg" /></center>
</br>
<center>
<strong>Asia Baru Packaging</strong></br>
Kantor: Jl.Rangkah 7 No. 27, Surabaya</br>
Kontak: Tn. Januar Tejasusilo
Telepon: 0818334083</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
Asia Baru Packaging adalah sebuah perusahaan percetakan khusus untuk kemasan yang berbahan dasar plastik 
dan kertas yang sudah mempunyai pengalaman selama bertahun-tahun. Kami tidak saja mencetak kemasan produk Anda, 
tetapi kami juga bisa menciptakan, mendesain ulang bahkan memberikan solusi untuk masalah kemasan yang mungkin Anda hadapi. 
Kami menjaga kualitas secara total mulai dari proses desain, produksi sampai layanan purna jual.
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="abp2.jpg" />
<img src="abp3.jpg" />
<img src="abp4.jpg" />

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

