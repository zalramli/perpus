<?php
mysql_connect("localhost","root","1234");
mysql_select_db("perpus_akn");

$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = mysql_query("select judul_buku from daftar_buku_perpus where judul_buku LIKE '%$q%'");
while($r = mysql_fetch_array($sql)) {
	$judul_buku = $r['judul_buku'];
	echo "$judul_buku \n";
}
?>
