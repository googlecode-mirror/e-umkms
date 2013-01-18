<?php
include "connect.php";
//get the value from form update
 $userid=$_POST['userid'];
		$password=$_POST['password'];
		$level=$_POST['level'];
		$alamat=$_POST['alamat'];
		$email=$_POST['email'];
		$telepon=$_POST['telepon'];

//query for update data in database
 $query = "UPDATE tabeluser SET password = '$password', level = '$level', alamat = '$alamat', email = '$email' WHERE userid = '$userid'" ;
 $result = mysql_query($query);
 //see the result
 if ($result) {
    include "show.php";
	echo "<h4> update data success </h4>";
}
?>