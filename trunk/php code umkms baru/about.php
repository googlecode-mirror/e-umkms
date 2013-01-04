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
<strong><font size="20">Sedikit Tentang Kami…</font></strong>
</center>
</br>
</br>

<center>
<table width=500 border=3 bordercolor=yellow style="border-collapse:collapse"><tr><td>
<center>Salam hangat untuk semuanya, kami selaku tim developer sebelumnya ingin mengucapkan terima kasih yang sebesar besarnya untuk Tuhan YME, 
kedua orang tua kami, para asisten praktikum, para teman teman dan semua orang yang telah membantu kami menyelesaikan tugas pembuatan web ini.
</br>
</br>
<center>
Kami sendiri terdiri dari : </br>
</br>
Prima Arifandi		(5210100049) </br>
M. Yordanis S		(5210100104) </br>
Putri Cahyaning B	(5210100142) </br>
</br>
Selain untuk tugas mata kuliah Rancang Bangun Perangkat Lunak, pembuatan web ini juga mempunyai maksud & tujuan  yang lain, yaitu : </br>
</br>
1. Turut serta dalam usaha mencerdaskan kehidupan bangsa </br>
2. Terciptanya Pemerataan Kesejahteraan Masyarakat </br>
3. Melakukan pemberdayaan UKM di Surabaya </br>
</br>
Akhir kata, semoga langkah - langkah kecil ini dapat bermanfaat dan berguna bagi kebaikan dan kejayaan bangsa & negara kita.
Tak lupa kami mengucapkan terima kasih kepada semua pihak yang telah memberikan bantuan baik material maupun imaterial dalam implementasi portal ini. </br>
</center>
 
</center>
</td></tr></table>
</center>
</br>

<body onload="UR_Start()"  style="background-color:yellow;">
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>


</body>  
</html>
