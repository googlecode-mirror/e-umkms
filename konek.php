<?php
// connect ke database
	$con = mysql_connect("localhost","root","");
	if(!con) {
		die('gak konek !' . mysql_error());
	}
	mysql_select_db("e-umkms", $con);
	mysql_close($con);
?>