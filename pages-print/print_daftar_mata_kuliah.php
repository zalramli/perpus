<?php
 // Define relative path from this script to mPDF
 $nama_dokumen='PDF With MPDF';
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

<table style="margin-left:-40px;">
    <tr>
        <td>Prodi</td>
        <td>:</td>
        <td><?php echo $_POST['prodi']; ?></td>
        <td>Semester</td>
        <td>:</td>
        <td><?php echo $_POST['semester']; ?></td>
    </tr>
    <tr>
        <td>Mata Kuliah</td>
        <td>:</td>
        <td><?php ?></td>
        <td>Dosen Pengampu</td>
        <td>:</td>
        <td><?php echo $_SESSION['username']; ?></td>
    </tr>
    <tr>
        <td>Kode MK</td>
        <td>:</td>
        <td><?php echo $_POST['mata_kuliah']; ?></td>
    </tr>
</table>

<table border="1" style="border-collapse:collapse;margin-left:-40px;margin-right:-40px;" width="100%">
	<tr>
        <th style="text-align:center;padding-bottom:30px;" rowspan="2">No.</th>
        <th style="width:9%;text-align:center;padding-bottom:30px;" rowspan="2">Nim</th>
        <th style="width:20%;text-align:center;padding-bottom:30px;" rowspan="2">Nama</th>
        <th colspan="6" style="text-align:center;padding-bottom:10px;">Unsur Penilaian</th>
        <th colspan="2" style="text-align:center;padding-bottom:30px;">Angka</th>
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
$sql=mysql_query("SELECT * FROM nilai");
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