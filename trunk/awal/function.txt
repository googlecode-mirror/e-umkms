<?php
include "connect.php";
class f{
	function register(){
	if(isset($_POST['Save'])){
	if($_POST['user']!=''&& $_POST['firstname']!=''&& $_POST['lastname']!=''&& $_POST['firstname']!='' ){
		$user=$_POST['user'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$pass=$_POST['pass'];
		$sql="insert into register values('".$user."','".$firstname."','".$lastname."','".$pass."')";
		mysql_query($sql) or (mysql_error());
	}}
	}
	
	
}