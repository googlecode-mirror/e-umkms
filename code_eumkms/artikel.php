<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
a:link {
	color: #0CF;
}
</style>
<body>
	<div class="row-fluid">
	<div class="span12">
	<div class="container">
	<div class="span10">
    <div class="hero-unit">
        <center><font><font color=blue>
        <h4>Form Artikel</h4></font>
        <hr width="400" size="3"></h5>
        <form method="POST" action="lihat.php">
        <table>
        <tr>
        <td>Nama Perusahaan</td>
        <td>&nbsp;:&nbsp;</td>
        <td><input type=text name='nama'></td>        
        </tr>
        <tr>
        <td valign=top>Alamat</td>
        <td valign=top>&nbsp;:&nbsp;</td>
        <td><textarea name='alamat'></textarea></td>
        </tr>
        <tr>
        <td>Deskripsi</td>
        <td>&nbsp;:&nbsp;</td>
        <td><textarea name="deskripsi"></textarea></td>
        </tr>
        <tr>
        <td colspan=3><br><center>
        <input type=submit value=SIMPAN>
        <input type=reset value=RESET>
        </center></td>
        </tr>
        </table>
        </form>
        </center>
    </div>
  </div>
  </div>
  </div>
<center><hr width=800 size=4>
<font color=blue size=2><b>
</b></font></center>
</body>