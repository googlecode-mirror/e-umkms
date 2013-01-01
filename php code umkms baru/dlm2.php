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
<center><img src="dlm1.jpg" /></center>
</br>
<center>
<strong>PT. DEMPOLASER METALINDO</strong></br>
Kantor: Jl. Rungkut Industri 1 No. 29, Surabaya</br>
Kontak: 081554111554</br>
Telepon: 62-31-8437361</br>
Fax: 62-31-8437362</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
PT. Dempolaser Metalindo adalah perusahaan yang bergerak di bidang Sheet Metal Jobshop and Fabrication dengan ISO 9001: 2008. 
PT. Dempolaser Metalindo adalah pabrikan yang memproduksi kiosk/ anjungan/ e-kiosk dengan tenaga ahli yang terampil, dengan peralatan modern. 
Sistem pemotongan menggunakan teknologi laser menjamin kepresisian produk yang kami buat.
PT. Dempolaser Metalindo juga melayani pembuatan kiosk/ anjungan/ e-kiosk sesuai dengan design serta keinginan customer/ custom.
Berbagai instansi pemerintah, swasta, perbankan, militer, pendidikan, serta instansi lainnya telah menggunakan jasa kami.Produk yang kami
 hasilkan mempunyai kwalitas kelas dunia.
Jika Bapak/ Ibu menginginkan produk kiosk yang berkualitas, PT. Dempolaser Metalindo adalah jawabannya.
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="dlm2.jpg" />
<img src="dlm3.jpg" />
<img src="dlm4.jpg" />

<body style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>

