<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
a:link {
	color: #0CF;
}
</style>
<div class="page-header">
<title>Artikel</title>
<div class="page-header">
  <center><h1><font color ="White">
  <b>E-</font><font color ="yellow">Umkms</font></b><small>|Ecommers-Usaha Mikro Kecil Menengah Surabaya</small>
  </h1></center>
</div>
<body>
	<div id="page-wrap">
				<div id="content">
			    <div class="page-header">
				<ul class="nav nav-tabs">
				<li><a href="index.php">Home</a>
				</li>
				<li><a href="#">Daftar</a></li>
				<li class="active"><a href="artikel.php">Artikel</a></li>
				<li><a href="xx">Profil Usaha Mikro</a></li>
				<li><a href="">Kontak Kami</a></li>
				<li class="#"><a href="logout.php">Logout</a></li>
				</ul>
	</div>
	<div class="span10">
    <div style="height:400px" class="hero-unit">
         <center><font color=blue>
        <h5>Tambah Artikel</font>
        <hr width="400" size="2"></h5>
        <form method="POST" action="input.php">
        <table style="width:400px; height:240px;">
        <tr>
        <td>Judul</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input style="height:30px; width:250px;" type=text name='judul'></td>
        </tr>
        <tr>
        <td>Kategori</td>
        <td>&nbsp;:&nbsp;</td>
        <td><select name='kategori'>
        <option value=Kerajinan>Kerajinan
        <option value=HomeIndustri>Home Industri
        <option value=Toko>Toko
        <option value=Kesenian>Kesenian
		<option value=Lainnya>Lainnya
        </select>
        </td>
        </tr>
        <tr>
        <td valign=top>Deskripsi</td>
        <td valign=top>&nbsp;:&nbsp;</td>
        <td><textarea style="height:120px; width:250px;" name='deskripsi'></textarea></td>
        </tr>
        <tr>
        <td style="height:110" colspan=3><br><center>
        <input type=submit value=SIMPAN>
        <input type=reset value=RESET>
        </center></td>
        </tr>
        </table>
        </form>
        </center>
     	<center><hr><font color ="white" size="2"><b> Copyright e-Usaha Mikro Kecil Menengah Surabaya | Dinas Koperasi Mikro Kecil Menengah</hr></br></br><b>
	</div>
	</div> 