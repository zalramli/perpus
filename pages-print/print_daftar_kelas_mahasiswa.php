<?php
session_start();
error_reporting();
 // Define relative path from this script to mPDF
$nama_dokumen='Daftar Nilai';
include '../config/config.php';
include '../print/mpdf60/mpdf.php';
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->
<table border="" cellspacing="0" cellpadding="0" style:"margin-bottom:3px;">
	<tr style="padding-left:-20px;">
                <td rowspan="6" width="100"><img src="polinema-logo.png" height="90"/></td>
                <td style="text-align: center; font-size: 13px"><b>KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</b></td>
                <td rowspan="6" width="90"><img src="aknl-logo.png" alt="" height="90" /></td>
    </tr>
    <tr>
                <td style="text-align: center; font-size: 11px"><b>PROGRAM STUDI DILUAR DOMISILI POLITEKNIK NEGERI MALANG</b></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 15px"><b>RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG</b></td>
            </tr>
            <tr>
                <td style="font-size: 10px; text-align: center">Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp.(0334) 8780440 Lumajang - 67311</td>
            </tr>
</table>
<hr style="color:2px solid black">
<?php
$id_prodi = $_POST['prodi'];
$query_nama_prodi = mysql_query("SELECT * FROM program_studi WHERE id_prodi='$id_prodi'");
$fetch_nama_prodi = mysql_fetch_array($query_nama_prodi);
$nama_prodi = $fetch_nama_prodi['nama_prodi'];

$id_semester = $_POST['semester'];
$query_nama_semester = mysql_query("SELECT * FROM semester WHERE id_semester='$id_semester'");
$fetch_nama_semester = mysql_fetch_array($query_nama_semester);
$nama_semester = $fetch_nama_semester['semester']." - ".$fetch_nama_semester['periode'];

$id_dosen = $_SESSION['username'];
$query_nama_dosen = mysql_query("SELECT * FROM dosen");
$fetch_nama_dosen = mysql_fetch_array($query_nama_dosen);
$nama_dosen = $fetch_nama_dosen['nama_dosen'];

$id_mata_kuliah = $_POST['mata_kuliah'];
$query_mata_kuliah = mysql_query("SELECT * FROM mata_kuliah WHERE kode='$id_mata_kuliah'");
$fetch_mata_kuliah = mysql_fetch_array($query_mata_kuliah);
$nama_mata_kuliah = $fetch_mata_kuliah['nama_makul'];

$id_kelas = $_POST['kelas'];

?>
<table style="margin-left:-40px;">
    <tr>
        <td>Prodi</td>
        <td>:</td>
        <td><?php echo $nama_prodi; ?></td>
        <td style="padding-left:15px;">Semester</td>
        <td>:</td>
        <td><?php echo $nama_semester; ?></td>
    </tr>
    <tr>
        <td>Mata Kuliah</td>
        <td>:</td>
        <td><?php echo $nama_mata_kuliah; ?></td>
        <td style="padding-left:15px;">Dosen Pengampu</td>
        <td>:</td>
        <td><?php echo $nama_dosen; ?></td>
    </tr>
    <tr>
        <td>Kode MK</td>
        <td>:</td>
        <td><?php echo $_POST['mata_kuliah']; ?></td>
    </tr>
</table>

<table border="1" style="border-collapse:collapse;margin-left:-40px;margin-right:-40px;" width="100%">
	<tr>
        <th style="text-align:center;line-height: 45%;" rowspan="2">No.</th>
        <th style="width:9%;text-align:center;line-height: 45%;" rowspan="2">Nim</th>
        <th style="width:20%;text-align:center;line-height: 45%;" rowspan="2">Nama</th>
        <th colspan="6" style="text-align:center;padding:10 auto">Unsur Penilaian</th>
        <th colspan="2" style="text-align:center;padding: 10 auto">Angka</th>
    </tr>
    <tr>
        <th>Presensi</th>
        <th>Quiz</th>
        <th>Tugas</th>
        <th>Praktek</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Angka</th>
        <th>Huruf</th>
    </tr>
<?php 
$sql=mysql_query("SELECT * FROM nilai WHERE id_dosen='$id_dosen' AND id_kelas='$id_kelas' AND id_mata_kuliah='$id_mata_kuliah'");
$no=1;
while($data=mysql_fetch_array($sql)){
echo'
	<tr>
		<td style="text-align:center;">'.$no++.'.</td>
		<td style="padding-left:6px;">'.$data['nim_mahasiswa'].'</td>
		<td style="padding-left:6px;">'.$data['nama'].'</td>
		<td style="text-align:center;">'.$data['presensi'].'</td>
		<td style="text-align:center;">'.$data['quiz'].'</td>
		<td style="text-align:center;">'.$data['tugas'].'</td>
		<td style="text-align:center;">'.$data['praktek'].'</td>
		<td style="text-align:center;">'.$data['uts'].'</td>
		<td style="text-align:center;">'.$data['uas'].'</td>
		<td style="text-align:center;">'.$data['angka'].'</td>
		<td style="text-align:center;">'.$data['huruf'].'</td>

	</tr>';
}
?>
</table>
<!--CONTOH Code END-->
 
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>