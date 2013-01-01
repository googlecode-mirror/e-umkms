<html>
<head> <link href="bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
</style>
<title>Sign Up</title>
<link rel="shortcut icon" href="favicon1.ico">
</head>
<center><img src="header.jpg" /></center>

<body>
<body style="background-color:yellow;">
<form id="form1" name="form1" method="post" action="">

 <?php
	include'connect.php';
	include'function.php';
	$f = new f;
	$f->register();
	if($f){
		echo"<center><a  style=font-family:Arial class=btn btn-primary btn-small href=home.php><b>Login Now</b></a></center>";
	}
	
 ?>
 </br>
 </strong></td>
  <div align="center" class="style2">
      <tr>
        <td><input name="user" type="text" id="user" value="user" size="50" /></td>
      </tr>
      <tr>
        <td><input name="firstname" type="text" id="firstname" value="firstname" size="50" /></td>
      </tr>
      <tr>
        <td><input name="lastname" type="text" id="lastname" value="lastname"  size="50" /></td>
      </tr>
	  <tr>
        <td><input name="pass" type="text" id="pass" value="pass" size="50" /></td>
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