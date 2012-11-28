<?php
include 'connect.php';

$user=htmlentities($_POST['user'],ENT_QUOTES);
$password=$_POST['pass'];

$query="SELECT * FROM register WHERE user='$user'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);

if(!$row){
	echo "<script>alert('Your User Name Is Not Correct');
					  </script>";;
}else{
	if($password!=$row['pass']){
		echo "<script>alert('Your Password Is Not Correct');
					  </script>";;
	}else{
	session_start();
		$_SESSION['register']=$user;
		$_SESSION['register2']=md5($_SERVER['HTTP_USER_AGENT']);
		header("location: home2.php");
		
	}
}
?>
