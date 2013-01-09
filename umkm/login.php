<?php
include "conn.php";
include "auth.php";
$f = new Auth();
$is_login = $f->login($_POST['username'],$_POST['password']);
if($is_login){
	header('location: index2.php');
	exit();
}else{
	echo "<script>alert('GAGAL LOGIN');
			  </script>";
			  echo "<script>window.location='index.php';
			  </script>";
			  exit;
}

?>