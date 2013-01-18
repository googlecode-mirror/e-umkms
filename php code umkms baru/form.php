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
  <li class="active"><a href="show.php">List Member</a></li>
  <li class="active"><a href="showbeli.php">List Pembeli</a></li>
  <li class="active"><a href="showdate.php">List Tanggal Order</a></li>
  <li class="active"><a href="showdetail.php">List Detail Pembelian</a></li>
  <li class="active"><a href="showkomen.php">List Saran / Komentar</a></li>
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

<body onload="UR_Start()" style="background-color:yellow;">
<?php
include 'connect.php';
$userid = $_GET['userid']; //get the no which will updated
$query = "SELECT * FROM tabeluser WHERE userid = $userid"; //get the data that will be updated
$result = mysql_query($query);
$data  = mysql_fetch_array($result);
?>
<form method="post" action="proses.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> userid </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="userid" disabled='disable' value="<?php echo $data['userid']; ?>"> </td>
  </tr>

  <tr>
  	<td>password</td>
    <td>:</td>
    <td> <input type="text" name="password" value="<?php echo $data['password']; ?>"> </td>
  </tr>

  <tr>
  	<td>level</td>
    <td>:</td>
 <td> <input type="text" name="level" value="<?php echo $data['level']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>alamat</td>
    <td>:</td>
 <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>email</td>
    <td>:</td>
  <td> <input type="text" name="email" value="<?php echo $data['email']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>telepon</td>
    <td>:</td>
<td> <input type="text" name="telepon" value="<?php echo $data['telepon']; ?>"> </td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['userid']; ?>">
	<input name="update" type="submit" id="update" value="Update">

  </tr>
</table>
</form>
<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>
</body>  
</html>

