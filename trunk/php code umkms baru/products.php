<?
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UMKM-SBY</title>
<link rel="shortcut icon" href="favicon1.ico">
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>

<link rel="stylesheet" type="css/text" href="../bootstrap.css" />
<h1>
<marquee direction=down loop=true height="50"><center><img src="header.jpg" /></center></marquee>
</h1>
<body style="background-color:yellow;">
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
	<h1 align="center">Produk Jual</h1>
	<center><input type="button" value="Batal Belanja" onclick="window.location='home2.php'" /></center>
	<table border="0" cellpadding="2px" width="600px">
		<?
			$result=mysql_query("select * from products");
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?=$row['picture']?>" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		<?=$row['description']?><br />
                    Harga:<big style="color:green">
                    	$<?=$row['price']?></big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <? } ?>
    </table>
</div>
<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</body>
</html>
