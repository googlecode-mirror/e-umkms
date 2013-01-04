<?php
include "connect.php";
class f{
	function tabeluser(){
	if(isset($_POST['Save'])){
	if($_POST['userid']!=''&& $_POST['password']!=''&& $_POST['level']!='' ){
		$userid=$_POST['userid'];
		$password=$_POST['password'];
		$level=$_POST['level'];
		$sql="insert into tabeluser values('".$userid."','".$password."','".$level."')";
		mysql_query($sql) or (mysql_error());
	}}
	}
	
	
}