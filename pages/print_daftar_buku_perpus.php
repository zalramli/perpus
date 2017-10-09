<?php
session_start();
error_reporting();
 // Define relative path from this script to mPDF
$nama_dokumen='Daftar Nilai';
include '../config/connect.php';
include '../print/mpdf60/mpdf.php';
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->
<table border="" cellspacing="0" cellpadding="0" style:"margin-bottom:3px;">
    <tr style="padding-left:-20px;">
                <td rowspan="6" width="100"><img src="../images/polinema-logo.png" height="90"/></td>
                <td style="text-align: center; font-size: 13px"><b>KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</b></td>
                <td rowspan="6" width="90"><img src="../images/aknl-logo.png" alt="" height="90" /></td>
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

<table border="1" style="border-collapse:collapse;margin-left:-40px;margin-right:-40px;" width="100%">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Tahun Terbit</th>
        <th>Ins Pengarang</th>
        <th>Ins Judul</th>
        <th>Pengarang</th>
        <th>Judul Buku</th>
        <th>Penerbit</th>
    </tr>
<?php 
$sql=mysql_query("SELECT * FROM daftar_buku_perpus ORDER BY judul_buku");
$no=1;
while($data=mysql_fetch_array($sql)){
echo'
    <tr>
        <td style="text-align:center; font-size:11.5;">'.$no++.'.</td>
        <td style="padding-left:6px; font-size:11.5;">'.$data['kode'].'</td>
        <td style="padding-left:6px; font-size:11.5;">'.$data['tahun_terbit'].'</td>
        <td style="text-align:center; font-size:11.5;">'.$data['ins_pengarang'].'</td>
        <td style="text-align:center; font-size:11.5;">'.$data['ins_judul'].'</td>
        <td style="text-align:center; font-size:11.5;">'.$data['pengarang'].'</td>
        <td style="text-align:center; font-size:11.5;">'.$data['judul_buku'].'</td>
        <td style="text-align:center; font-size:11.5;">'.$data['penerbit'].'</td>

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