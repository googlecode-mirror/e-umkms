<html>
<head> <link href="bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
</style>
<title>Sign Up</title>
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
	$f->tabeluser();
	if($f){
		echo"<center><a  style=font-family:Arial class=btn btn-primary btn-small href=home.php><b>Login Now</b></a></center>";
	}
	
 ?>
 </br>
 <center><input type="button" value="Kembali ke Menu Utama" onclick="window.location='home.php'" /></center>
 </br>
 </strong></td>
  <div align="center" class="style2">
      <tr>
        <td><input name="userid" type="text" id="userid" value="userid" size="50" /></td>
      </tr>
	  </br>
	  <tr>
        <td><input name="password" type="password" id="password" value="password" size="50" /></td>
      </tr>
	  </br>
	  <tr>
        <td><input name="level" type="text" id="level" value="level" size="50" /></td>
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
</body>
</html>