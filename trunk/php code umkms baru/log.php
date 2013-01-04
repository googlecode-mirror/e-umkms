<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("umkms");

$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM tabeluser WHERE userid='$userid' AND password='$psw'");
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['userid'] = $c['userid'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
            header("location:home3.php");
        }else if($c['level']=="user"){
            header("location:home2.php");
        }
    }else{
         die("password salah <a href=\"javascript:history.back()\">kembali</a>");
    }
}else if($op=="out"){
    unset($_SESSION['userid']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>
