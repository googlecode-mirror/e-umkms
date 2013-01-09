<?php
	include "functionweb.php";
	$a = new functionWEB();
	$a->register();
	if(!$a){
		echo "<script>alert('REGISTER GAGAL');
			</script>";
		echo "<script>window.location='index.php';
			</script>";
		exit();
	}else{
		echo "<script>alert('REGISTER BERHASIL!');
			</script>";
		echo "<script>window.location='index.php';
			</script>";
		exit();
	}
?>