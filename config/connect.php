<?php
$host='localhost';
$username="root";
$password='';
$database='perpus_akn';

$connect=mysql_connect($host,$username,$password);
if (!$connect) {
echo "Gagal".mysql_error();
}

$seleksidb=mysql_select_db($database);


function autogenerate($field,$tabel,$digit,$kode){
	$data = mysql_fetch_array(mysql_query("SELECT MAX(RIGHT($field,$digit)) FROM $tabel"));
	$id = (int)$data[0]+1;
	$id_baru = $kode.sprintf('%0'.$digit.'s',$id);
	echo $id_baru;

}
?>