<?
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='update'){
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];
		
		$result=mysql_query("insert into customers values('','$name','$email','$address','$phone')");
		$customerid=mysql_insert_id();
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date','$customerid')");
		$orderid=mysql_insert_id();
		
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			mysql_query("insert into order_detail values ($orderid,$pid,$q,$price)");
		}
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UMKM-SBY</title>
<link rel="shortcut icon" href="favicon1.ico">
<script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Kolom harus terisi semua (kolom nama)');
			f.name.focus();
			return false;
		}
		var f=document.form1;
		if(f.address.value==''){
			alert('Kolom harus terisi semua (kolom alamat)');
			f.address.focus();
			return false;
		}
		var f=document.form1;
		if(f.email.value==''){
			alert('Kolom harus terisi semua (kolom email)');
			f.email.focus();
			return false;
		}
		var f=document.form1;
		if(f.phone.value==''){
			alert('Kolom harus terisi semua (kolom telepon)');
			f.phone.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>
</head>
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
</h1>
<body onload="UR_Start()"  style="background-color:yellow;">
<form name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Info Billing</h1>
        <table border="0" cellpadding="2px">
        	<tr><td>Total Order:</td><td><?=get_order_total()?></td></tr>
            <tr><td>Nama:</td><td><input type="text" name="name" /></td></tr>
            <tr><td>Alamat:</td><td><input type="text" name="address" /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
            <tr><td>Telepon:</td><td><input type="text" name="phone" /></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Konfirmasikan Order" /></td></tr>
        </table>
	</div>
</form>
</br>
<center><input type="button" value="Selesai Belanja" onclick="window.location='home2.php'" /></center>
<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</body>
</html>
