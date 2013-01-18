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
<font size="6">Artikel usaha kecil menengah sebagai potret UKM Indonesia</font>
</center>
</br>
<center>
Artikel usaha kecil menengah ini akan mengulas mengenai usaha kecil mengengah di Indonesia. Pentingnya akan usaha kecil 
menengah telah ditunjukkan oleh bertanhannya UKM di tengah krisis eknomi global yang malanda beberapa waktu lalu. Namun,
 masih banyak permasalahan dan kendala yang dihadapi oleh usaha kecil ini kurang mampu bersaing dengan produsen besar dan 
 kendala modal. Nah, sebelum itu, kita perlu tahu definisi usaha kecil menengah. Usaha kecil menengah adalah usaha yang memiliki 
 jumaph karyawan kurang dari 50 orang dengan kekayaan bersih tidak lebih dari Rp. 200 juta dan tidak termasuh tanah dan bangunan,
 milik WNI dan maksimal penjualan 1 miliar rupiah, berdiri sendiri dan berbentuk badan usaha, usaha perorangan atau koperasi.

Jenis usaha kecil menengah tersebar dari berbabagi unit usaha seperti pertanian, perdagangan, industri pengolahan, komunikasi
 dan pengangkutan, bangunan, keuangan dan listrik dan gas serta air bersih. Artikel usaha kecil menengah akan meng-in-input data 
 bahwa jumlah usaha kecil sangan banyak, tapi omzet yang digabungkan dari keseluruhan jumlah tidak sebanding dengan satu omzet
 perusahaan skala nasional.
Jenis usaha kecil ini memang sangat kuat dan tahan banting terhadap krisis ekonomi sekalipun. Karena itu, kita perlu megembangakannya.
 Melalui artikel usaha kecil menengah ini, kita perlu mendesak pemerintah karena pemerintah yang paling bertanggungjawab terhadap pengembangan 
 usaha kecil menengah di Indonesia. Salah satu diantaranya pemerintah perlu menciptakan kondisi iklim usaha yang kondusif berupa keringanan pajak,
 kemudahan perijinan dan lain-lain.

Artikel usaha kecil menengah juga perlu mendesak pemerintah memberikan perlindungan usaha terutama usaha tradisional 
dari kalangan ekonomi lemah. Selain itu, pengembangan kemitraan dan pelatihan para wiraswastawan perlu dilakukan. 
Artikel usaha kecil juga menyarankan agar wiraswasawan melalui pemerintah giat melakukan promosi produk seperti 
dengan melakukan talk-show dengan mitra usaha lain. Sarana dan prasarana juga mesti ditingkatkan, begitu pula dengan 
pemantapan asosiasi dan pengembangan kerja sama yang setara. Dengan begitu, UKM di Indonesia akan semakin mantap dan maju.
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

