<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
a:link {
	color: #0CF;
}
</style>
<head>
<title>about us</title>
</head>
<div class="page-header">
  <center><h3>About Us<small><br>Ecommers-Usaha Mikro Kecil Menengah</br></small></h3></center>

<p align ="center">Ecommers-Usaha Mikro Kecil Menengah adalah Media Promosi Online khususnya terletak Surabaya. Disini kami menghadirkan untuk memberikan solusi bagi yang terkendala pada masalah promosi untuk mengenalkan produk UMKM yang ada di Surabaya.</p><p align ="center">Oleh karena itu kami memberikan Sarana Promosi GRATIS untuk para pelaku 
UMKM sehingga kami bisa membantu mengenalkan Produk – produk UMKM kita khususnya untuk wilayah Surabaya sehingga bisa membantu mengenalkan 
Produk UMKM di Seluruh Indonesia yang mana secara Otomatis akan menambahkan pula omset penjualan bagi para pelaku UMKM kita. Disini kami 
memberikan sarana promosi GRATIS sehingga kami bisa membantu para pelaku UMKM agar mereka dapat lagi bersemangat dengan menambah kreatifitas 
untuk menambah jumlah produk sehingga kota Surabaya pada khususnya bisa memperkenalkan Produk UMKM sendiri tanpa harus kita menunggu lebih 
lama lagi.</p> <p align ="center">Saatnya UMKM berjaya di Negeri sendiri sehingga kita bersama-sama siap untuk menghadapi perdagangan bebas yang akan masuk ke Indonesia.
Saatnya Memperkenalkan Produk UMKM kita agar bisa berjaya di Tanah Air Sendiri ini adalah salah satu pembuktian bahwa Produk 
UMKM kita tidaklah kalah dengan Produk Luar. Melalui UMKM Surabaya ini kami berniat membantu untuk mempromosikan Produk UMKM khususnya 
Surabaya dan sekitarnya sehingga saatnya untuk Bagi Anda yang ingin memperluas pemasaran hingga di Seluruh Indonesia disinilah tempatnya 
Atau yang ingin menambah Omzet penjualan untuk produknya Ayo bergabung bersama kami di UMKM Surabaya.</p>
<br>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<form class="affix" name="input" action="aboutus.php" method="post" enctype="multipart/form-data">
					<legend>Pesan</legend>
					<div class="control-group">
						<label class="control-label" for="inputIcon">Nama</label>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
								<input class="input-large" rows="3" type="text" name="nama" placeholder="Isi Nama Anda" autofocus="autofocus" required="required"><br>
							</div>
						</div>
					</div>
					
					<label>Pesan/Komentar</label>
					<textarea class="input-xlarge" rows="2" name="catatan" required="required"></textarea><br>
					<input  type="submit" value="Submit">
					<input  type="reset" value="Reset">
					</form>
				</div>
				<div class="span9">
</div>
		<?php
			include 'aboutus_db.php';
			$db = new aboutus_db();
			