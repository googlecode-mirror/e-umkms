<html>
<head> <link href="bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
</style>
<title>Tulis Komentar / Saran Anda</title>
<link rel="shortcut icon" href="favicon1.ico">
</head>
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

<body>
<body onload="UR_Start()"  style="background-color:yellow;">
<form id="form1" name="form1" method="post" action="">
</br>
 <?php
	include'connect.php';
	include'function.php';
	$f = new f;
	$f->komen();
	if($f){
		echo"<center><a  style=font-family:Arial class=btn btn-primary btn-small href=home2.php><b>Ke Homepage</b></a></center>";
	}
	
 ?>
</br>
<center>
Masukkan saran dan komentar anda pada kolom di bawah ini
</center>
</br>
 </strong></td>
  <div align="center" class="style2">
      <tr>
        <td><input name="nama" type="text" id="nama" value="nama" size="20" /></td>
      </tr>
	  </br>
	  <tr>
        <td><input name="komen" type="text" id="komentar" value="komentar dan saran" size="160" /></td>
      </tr>
      <tr>
        <td><span class="style2"></span></td>
        <td>&nbsp;</td>
        <td><label></label></td>
      </tr>
      <tr>
        <td><span class="style2"></span></td>
        <td>&nbsp;</td>
        <td>
			<input name="Save" type="submit" id="Save" value="Save" />        
		</td>
      </tr>
  </div>
</form>
<center><a href="ymsgr:sendIM?calamity_103"> <img src="http://opi.yahoo.com/online?u=calamity_103&m=g&t=14" border="0" alt="" style="opacity: 1;"> </a></center>
<footer><p style="font-family:Arial;"><center><strong><marquee behavior=alternate>

	Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>
</body>
</html>