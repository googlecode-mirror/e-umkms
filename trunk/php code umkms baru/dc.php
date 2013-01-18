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

<form id="form1" name="form1" method="post" action="login.php" align=right>
          <tr>
            <td><input name="user" type="text" id="user" value="username" /></td>
          </tr>
          <tr>
            <td><input name="pass" type="password" id="pass" value="password" /></td>
          </tr>
		  
</tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Login" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
              </form>
</h1>

<ul class="nav nav-pills">
  <li class="active"><a href="home.php">Home</a></li>
  <li class="active"><a href="about.php">About Us</a></li>
  <li class="active"><a href="artikel.php">Artikel</a></li>
  <li class="active"><a href="profil.php">Profil UMKMS</a></li>
  <li class="active"><a href="kontak.php">Kontak Kami</a></li>
  <li class="active"><a href="register.php">Sign Up</a></li>
  <li class="active"><a href="#">Lupa Password</a></li>
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
<center><input type="button" value="Kembali ke Menu Profil UMKM" onclick="window.location='profil.php'" /></center>
</br>
<center><a href="ymsgr:sendIM?calamity_103"> <img src="http://opi.yahoo.com/online?u=calamity_103&m=g&t=14" border="0" alt="" style="opacity: 1;"> </a></center>
<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>

</body>  
</html>
