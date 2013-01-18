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
<strong><font size="20">Artikel</font></strong>
</center>
</br>
</br>

<center>
<table width=500 border=3 bordercolor=yellow style="border-collapse:collapse"><tr><td>
<center>
<font size="6">Kredit Usaha Rakyat (KUR)</font>
</center>
</br>
<center>Pada tanggal 5 November 2007, Presiden meluncurkan Kredit Usaha Rakyat (KUR), dengan fasilitas penjaminan kredit dari 
pemerintah melalui PT Aksrindo dan Perum Jamkrindo. Adapun Bank Pelaksana yang menyalurkan KUR ini adalah Bank BRI, 
Bank Mandiri, Bang BNI, Banj BTN, Bank Syariah Mandiri, dan Bank Bukopin.
KUR ini merupakan fasilitas pembiayaan yang dapat diakses oleh UMKM dan Koperasi terutama yang memiliki usaha yang layak 
namun belum bankable. Maksudnya adalah usaha tersebut memiliki prospek bisnis yang baik dan memiliki kemampuan untuk mengembalikan.
 UMKM dan Koperasi yang diharapkan dapat mengakses KUR adalah yang bergerak di sektor usaha produktif antara lain : pertanian, perikanan,
 dan kelautan, perindustrian, kehutanan, dan jasa keuangan simpan pinjam. Penyaluran KUR dapat dilakukan langsung, maksudnya UMKM 
 dan Koperasi dapat langsung mengakses KUR di kantor Cabang atau Kantor Cabang Pembantu Bank Pelaksana. Untuk lebih mendekatkan pelayanan 
 kepada usaha mikro, maka penyaluran KUR dapat juga dilakukan secara tidak langsung, maksudnya usaha mikro dapat mengakses KUR melalui Lembaga
 Keuangan Mikro dan KSPIUSP Koperasi, atau melalui kegiatan linkage program lainnya yang bekerjasama dengan Bank pelaksana.
Memperhatikan kemanfaatan KUR, kedepan penyalurannya semakin diperluas dengan prosedur diusahakan semakin mudah dan proses yang lebih cepat. 
Disamping itu mulai tahun 2010 Bank Pelaksana KUR menjadi 19 Bank yaitu ; PT. BRI, PT. Mandiri, PT. BNI, PT. BTN, PT. Bank Syariah Mandiri
 dan PT. Bukopin ditambah 13 Bank Pembangunan Daerah (BPD) yaitu : PT. Bank DKI, PT. BPD Jabar dan Banten, PT. BPD Jawa Tengah, 
 PT. BPD Jawa Timur, BPD DI Yogyakarta, PT. BPD Nusa Tenggara Barat, PT. BPD Sumatra Barat, PT. BPD Kalimantan Barat, PT. Bank Pembangunan Kalteng,
 BPD Kalimantan Selatan, PT. BPD Sulawesi Utara, PT. BPD Maluku dan PT. BPD Papua.
 </center>
</td></tr></table>
</center>
</br>
<center><input type="button" value="Kembali ke Menu Artikel" onclick="window.location='artikel2.php'" /></center>
</br>
<body onload="UR_Start()"  style="background-color:yellow;">
<form method="POST" action="register.php">  
<center><a href="ymsgr:sendIM?calamity_103"> <img src="http://opi.yahoo.com/online?u=calamity_103&m=g&t=14" border="0" alt="" style="opacity: 1;"> </a></center>
<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>

</body>  
</html>

