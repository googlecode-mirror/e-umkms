<?php
class Auth{
	function __construct(){
		session_start();
	}
	
	function login($username, $password){
		$query="SELECT * FROM login WHERE Username='$username'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		if(!$row){
			return false;
		}else{
			if($password!=$row['Password']){
				return false;
				}else{
					$_SESSION['login']=$username;
					return true;
			}
		}
	}
	
	function logout(){
		session_destroy();
	}
}