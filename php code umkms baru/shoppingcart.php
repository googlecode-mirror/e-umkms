<?
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='bebrapa tak terupdate!, tidak boleh kosong';
			}
		}
	}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UMKM-SBY</title>
<link rel="shortcut icon" href="favicon1.ico">
<script language="javascript">
	function del(pid){
		if(confirm('Yakin mau dihapus ?')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('Ini akan mengkosongkan shopping chart anda, lanjut?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>
</head>
<link rel="stylesheet" type="css/text" href="../bootstrap.css" />
<h1>
<marquee direction=down loop=true height="50"><center><img src="header.jpg" /></center></marquee>
</h1>
<body style="background-color:yellow;">
<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Shopping Cart Anda</h1>
    <center><input type="button" value="Lanjut Belanja" onclick="window.location='products.php'" /></center>
	<center><input type="button" value="Batal Belanja" onclick="window.location='home2.php'" /></center>
    </div>
    	
    	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:pink" width="100%">
    	<?
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td>Serial</td><td>Nama</td><td>Harga</td><td>Jumlah</td><td>Total</td><td>Opsi</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF"><td><?=$i+1?></td><td><?=$pname?></td>
                    <td>$ <?=get_price($pid)?></td>
                    <td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>                    
                    <td>$ <?=get_price($pid)*$q?></td>
                    <td><a href="javascript:del(<?=$pid?>)">Hapus</a></td></tr>
            <?					
				}
			?>
				<tr><td><b>Total Order Anda: $<?=get_order_total()?></b></td><td colspan="5" align="right"><input type="button" value="Bersihkan Cart" onclick="clear_cart()"><input type="button" value="Update Cart" onclick="update_cart()"><input type="button" value="Tulis Order" onclick="window.location='billing.php'"></td></tr>
			<?
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>Tidak ada belanjaan!</td>";
			}
		?>
        </table>
    </div>
</form>
<footer><p style="font-family:Arial;">
<center><strong><marquee behavior=alternate>
Website ini bukan merupakan website resmi UMKM Surabaya, hanya merupakan web tugas kuliah
</marquee></strong></center></p></footer>
</body>
</html>