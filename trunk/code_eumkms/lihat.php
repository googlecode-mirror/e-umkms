<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<style type="text/css">
a:link {
	color: #0CF;
}
</style>
    <div class="span10">
    <div class="hero-unit">
    <center>
    <font color=blue>
<h5>Daftar Artikel<hr width=400 size=3></h5></font>

<?php
include"konek.php";
$no = 1;

$lihat = mysql_query("SELECT * FROM artikel order by id DESC");
while($a = mysql_fetch_array($lihat)){
echo"
<tr>
<td align=right>$no.</td>
<td align=right>$a[nama]</td>
<td>$a[alamat]</td>
<td>$a[keterangan]</td>
<td align=center><a class=btn btn-primary btn-small href=edit.php?id=$a[id_hp]>Edit</a></li></ul></td>
<td align=center><a class=btn btn-primary btn-small href=\"delete.php?id=$a[id_hp]\">Hapus</a></li></ul></td>
</tr>";
$no++;
}
?>
</table>
<br /><a class="btn btn-primary btn-small" href="form.php">Tambahkan Daftar</a>
</center>
<br />
</div>
</div>
<center><hr width=800 size=4>
</center><br /><br />
</font>
</div>
</div>