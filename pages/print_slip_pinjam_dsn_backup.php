<?php
session_start();
error_reporting(0);
ob_start(); //buat koneksi ke database
include '../config/connect.php';
$kode   = $_GET['ID']; //kode berita yang akan dikonvert
$query  = mysql_query("SELECT * FROM tabel_peminjaman WHERE id='$kode'");
$data   = mysql_fetch_array($query);
$total = $data['jumlah1'] + $data['jumlah2'];
?>
  <html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $data['no_pendaftaran']; ?></title>
    <style type="text/css">

    </style>
  </head>
  <body>
  
    <table border="" cellspacing="0" cellpadding="0" style:"margin-bottom:3px;">
            <tr style="padding-left="10px;">
                <td rowspan="6" width="100"><img src="../images/polinema-logo.png" height="90"/></td>
                <td style="text-align: center; font-size: 13px"><b>KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI</b></td>
                <td rowspan="6" width="90"><img src="../images/aknl-logo.png" alt="" height="90" /></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 15px"><b>PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG</b></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 19px"><b>RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG</b></td>
            </tr>
            <tr>
                <td style="font-size: 12px; text-align: center">Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp.(0334) 8780440 Lumajang - 67311</td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 14px"><b>website : aknlumajang.ac.id      email : info@aknlumajang.ac.id</b></td>
            </tr>
            <tr>
                <td style="text-align: center; font-size: 14px"><b>e-mail : aknlumajang@yahoo.com dan aknlumajang@gmail.com</b></td>
            </tr>
            <tr>
              <td colspan="3" style="padding-top:-20px">
                <hr>
              </td>
            </tr>
    </table >
    <p align="center" style="padding-top: -40px;font-size:15px;"><b>Slip Pinjam</b></p>

    <table border="" style="margin-top:-20px;" width="500px;">
  <tr>
    <td width="">Tgl. Pinjam</td>
    <td width="">:</td>
    <td width=""><?php echo $data['tgl_pinjam']; ?></td>
    <td width="20"></td>
    <td width="">Tgl. Kembali</td>
    <td width="">:</td>
    <td width=""><?php echo $data['tgl_kembali'] ?></td>
  </tr>
  <tr>
    <td width="">Nomor Induk</td>
    <td width="">:</td>
    <td width=""><?php echo $data['nomor_induk'] ?></td>
  </tr>
  <tr>
    <td width="">Nama Peminjam</td>
    <td width="">:</td>
    <td width=""><?php echo $data['nama_peminjam'] ?></td>
  </tr>
  <tr>
    <td width="">Status</td>
    <td width="">:</td>
    <td width=""><?php echo $data['jabatan'] ?></td>
  </tr>
  <tr>
    <td width="">Program Studi</td>
    <td width="">:</td>
    <td width=""><?php echo $data['program_studi'] ?></td>
  </tr>
  <tr>
    <td width="">Judul Buku</td>
    <td width="">:</td>
    <td width=""><?php echo $data['judul_buku1']; ?></td>
    <td width="20"></td>
    <td width="">Jumlah</td>
    <td width="">:</td>
    <td width=""><?php echo $data['jumlah1']; ?></td>
  </tr>
  <tr>
    <td width="">Judul Buku</td>
    <td width="">:</td>
    <td width=""><?php echo $data['judul_buku2']; ?></td>
    <td width="20"></td>
    <td width="">Jumlah</td>
    <td width="">:</td>
    <td width=""><?php echo $data['jumlah2']; ?></td>
  </tr>
  <tr>
    <td colspan="4"></td>
    <td>Total</td>
    <td>:</td>
    <td><?php echo $total; ?></td>
  </tr>
</table>
<Br>
<table border="">
  <tr>
    <td style="width: 320px;">
        <?php
        $munculcatatan=mysql_query("SELECT * FROM catatan_dinamis WHERE id='1'");
        $fetchcatatan=mysql_fetch_array($munculcatatan);
        echo "**".$fetchcatatan['isi']."<br><br>";
        ?>
    </td>
  </tr>
</table>
<table border='' style="margin-top:-70px;">
  <tr>
   
    <td width="430px;" style="padding-right: 20px;"></td>
    <td width="190px;">
      <?php
        echo "<p style='margin-right:px;' align=''>Lumajang, ".date('d-m-Y')."</p>";

        echo "<br><br><br>".$_SESSION['username'];
      ?>
    </td>
  </tr>
</table>
  
  </body>
  </html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="slip_pinjam-".$kode.date('d-m-Y').".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya  
//==========================================================================================================  
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan ba"ca-baca tutorial tentang HTML2PDF  
//==========================================================================================================  
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
require_once('../print/html2pdf/html2pdf.class.php');
try
{
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(10, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content);
  $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }

?>
