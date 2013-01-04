<?php
session_start();


if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="user"){
    die("Anda bukan user");
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

<body onload="UR_Start()" style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>

</body>  
</html>

