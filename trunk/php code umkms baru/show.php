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
<strong><font size="20">Selamat Datang di �Web UMKM Surabaya�</font></strong>
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
<form method="POST" action="register.php">
<?php
include 'connect.php';
$query = "SELECT * FROM tabeluser"; //the query for get all data in tb_student
$result = mysql_query($query);

echo "<table border='0' cellpadding='2' cellspacing='2' align='center'>";
echo "<tr bgcolor='orange' align='center'>
		<td> <b> userid </b> </td>
        <td> <b> password </b> </td>
        <td> <b> level </b> </td>
		<td> <b> alamat </b> </td>
		<td> <b> email </b> </td>
		<td> <b> telepon </b> </td>
        <td> <b> action </b> </td>
     </tr>";
while ($data = mysql_fetch_array($result)) //mysql_fetch_array = get the query data into array
{
  echo "<tr align='center'>
  			<td>".$data['userid']."</td>
            <td>".$data['password']."</td>
            <td>".$data['level']."</td>
			<td>".$data['alamat']."</td>
			<td>".$data['email']."</td>
			<td>".$data['telepon']."</td>
            <td> <i> <a href='form.php?userid=".$data['userid']."'> Update </a> </i></td>
       </tr>";
}
echo "</table>";
?>
<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</br>
<marquee direction=down loop=true height="50"><center><img src="foot.jpg" /></center></marquee>
</body>  
</html>

