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
<center><img src="vp1.jpg" /></center>
</br>
<center>
<strong>VIP BARCODE SOLUTION</strong></br>
HiTech Mall, Lantai Dasar, Blok A-67, Surabaya</br>
Kontak: Ibu Birgitta Juliana</br>
Telepon: 62-31 549 1953 / 62-31 819 21 888</br>
Fax: 62-31 549 1953</br>
</br>
<table width=700 border=3 bordercolor=yellow align="center"><tr><td>
<center>
SPECIALIZED IN AUTO ID, BARCODING, DATABASE DEVELOPMENT.
MASTER DEALER FOR: 
FARGO ID CARD PRODUCTS.
OPTICON BARCODE SCANNERS.
TSC BARCODE PRINTERS.
POS SYSTEM.
ID CARD PRINTER CONSUMABLES.
BARCODE PRINTER CONSUMABLES.
QUEUE MACHINE
TALLY GENICOM & PRINTRONIX CONSUMABLES.
SERVICE & REPAIR SPECIALIST.

DEALER/ RESELLER WELCOME...
</center>
</table></tr></td>
<strong>Galeri Produk</strong></br>
<img src="vp2.jpg" />
<img src="vp3.jpg" />
<img src="vp4.jpg" />
<body onload="UR_Start()"  style="background-color:yellow;">
<form method="POST" action="register.php">  
</br>
<center><input type="button" value="Kembali ke Menu Profil UMKM" onclick="window.location='profil.php'" /></center>
</br>
<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>
