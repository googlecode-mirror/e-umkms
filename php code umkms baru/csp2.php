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
<?$userid=$_COOKIE['userid'];?>
<font size=+2 face="arial" color=magenta>Selamat datang di e-UMKMS,  <?php echo"$userid";?></font>
</br>
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
  <li class="active"><a href="komen.php">Saran dan Komentar</a></li>
  <li class="active"><a href="search.php">Cari</a></li>
  <li class="active"><a href="home.php">Logout</a></li>
</ul>
</br>
</br>
<center>
<strong><font size="20">Profil UMKM</font></strong>
</center>
</br>
</br>
<center><img src="csp1.jpg" /></center>
</br>
<center>
<strong>CENTRAL SPS</strong></br>
Kantor: Jl.Ngagel Jaya Selatan Ruko MMI Blok L No 19-20 Surabaya, Jawa Timur</br>
Kontak: Tn. Chriesti Kartiko</br>
Telepon: +62315043650</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
CENTRAL SPS, penyedia bahan-bahan perlengkapan CETAK SABLON dan CETAK DIGITAL terlengkap di Indonesia. Telah dipercaya lebih dari tiga dekade untuk memberikan solusi tepat bagi pelanggan.
Kami menyediakan perlengkapan sablon untuk diaplikasikan di berbagai industri tekstil, plastik, keramik, gelas, elektronik, dsb � tinta sablon, kain screen, rakel, mesin sablon, bingkai kayu dan aluminium. Selain itu juga menyediakan jasa afdruk, pemasangan kain, matching warna.
Tinta cetak basis air, minyak, plastisol, UV - FURUKAWA, COATES, EPI, POLYONE , Emulsi ULANO, UNIMIX, ALTA , Rakel ORTECH, UNITEX, ACLA, TEXPRO , Kain Screen VS-MONOPRINT , Screen komplit CENTRAL SCREEN , Mesin dan perlengkapan cetak ATMA, APOLLO, LIGHTECH, EPI RACK , Pelatihan dan peragaan, Seminar, Workshop.
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="csp2.jpg" />
<img src="csp3.jpg" />
<img src="csp4.jpg" />

<body onload="UR_Start()"  style="background-color:yellow;">
<form method="POST" action="register.php">  
</br>
<center><input type="button" value="Kembali ke Menu Profil UMKM" onclick="window.location='profil2.php'" /></center>
</br>
<center><a href="ymsgr:sendIM?calamity_103"> <img src="http://opi.yahoo.com/online?u=calamity_103&m=g&t=14" border="0" alt="" style="opacity: 1;"> </a></center>
<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>

</body>  
</html>

