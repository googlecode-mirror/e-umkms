<?php
session_start();


if(!isset($_SESSION['userid'])){
    die("Anda belum login");
}

if($_SESSION['level']!="admin"){
    die("Anda bukan admin");
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
 <li class="active"><a href="home3.php">Home</a></li>
  <li class="active"><a href="addprod.php">Tambah Produk</a></li>
  <li class="active"><a href="show.php">List Member</a></li>
  <li class="active"><a href="showbeli.php">List Pembeli</a></li>
  <li class="active"><a href="showdate.php">List Tanggal Order</a></li>
  <li class="active"><a href="showdetail.php">List Detail Pembelian</a></li>
  <li class="active"><a href="showkomen.php">List Saran / Komentar</a></li>
  <li class="active"><a href="delete.php">Hapus</a></li>
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
</br>

<body onload="UR_Start()" style="background-color:yellow;">
<form id="form1" name="form1" method="post" action="">
</br>
 <?php
	include'connect.php';
	include'function.php';
	$f = new f;
	$f->products();
	if($f){
		echo"<center><a  style=font-family:Arial class=btn btn-primary btn-small href=home3.php><b>Ke Homepage</b></a></center>";
	}
	
 ?>
</br>
<center>
Masukkan produk yang akan ditambah
</center>
</br>
 </strong></td>
  <div align="center" class="style2">
      <tr>
        <td><input name="serial" type="text" id="serial" value="serial" size="11" /></td>
      </tr>
	  </br>
	  <tr>
        <td><input name="name" type="text" id="name" value="name" size="20" /></td>
      </tr>
	   </br>
	  <tr>
        <td><input name="description" type="text" id="description" value="description" size="255" /></td>
      </tr>
	   </br>
	  <tr>
        <td><input name="price" type="text" id="price" value="price" size="110" /></td>
      </tr>
	  </br>
	  <tr>
        <td><input name="picture" type="text" id="picture" value="picture" size="110" /></td>
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
	  <tr>
        <td><span class="style2"></span></td>
        <td>&nbsp;</td>
        <td><label></label></td>
      </tr>
	  <tr>
        <td><span class="style2"></span></td>
        <td>&nbsp;</td>
        <td><label></label></td>
      </tr>
	   <tr>
        <td><span class="style2"></span></td>
        <td>&nbsp;</td>
        <td><label></label></td>
      </tr>
  </div>
</form>
<form method="POST" action="register.php">  

<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>
</body>  
</html>

