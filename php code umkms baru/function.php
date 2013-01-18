<?php
include "connect.php";
class f{
	function tabeluser(){
	if(isset($_POST['Save'])){
	if($_POST['userid']!=''&& $_POST['password']!=''&& $_POST['level']!=''&& $_POST['alamat']!=''&& $_POST['email']!=''&& $_POST['telepon']!='' ){
		$userid=$_POST['userid'];
		$password=$_POST['password'];
		$level=$_POST['level'];
		$alamat=$_POST['alamat'];
		$email=$_POST['email'];
		$telepon=$_POST['telepon'];
		$sql="insert into tabeluser values('".$userid."','".$password."','".$level."','".$alamat."','".$email."','".$telepon."')";
		mysql_query($sql) or (mysql_error());
	}}
	}
	
	function komen(){
	if(isset($_POST['Save'])){
	if($_POST['nama']!=''&& $_POST['komen']!='' ){
		$nama=$_POST['nama'];
		$komen=$_POST['komen'];
		$sql="insert into komen values('".$nama."','".$komen."')";
		mysql_query($sql) or (mysql_error());
	}}
	}
	
	function products(){
	if(isset($_POST['Save'])){
	if($_POST['serial']!=''&& $_POST['name']!=''&& $_POST['description']!=''&& $_POST['price']!='' && $_POST['picture']!='' ){
		$serial=$_POST['serial'];
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$picture=$_POST['picture'];
		$sql="insert into products values('".$serial."','".$name."','".$description."','".$price."','".$picture."')";
		mysql_query($sql) or (mysql_error());
	}}
	}
	
	
}