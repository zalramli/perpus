<?php
session_start();
error_reporting(0);
include '../config/connect.php';
$kode = $_GET['ID'];
$query = mysql_query("SELECT * FROM tabel_peminjaman WHERE id='$kode'");
$data = mysql_fetch_array($query);
$tanggal_hari_ini = date("d-m-Y");
$tanggal_pinjam=date("d-m-Y",strtotime($data['tgl_pinjam']));
$tanggal_kembali=date("d-m-Y",strtotime($data['tgl_kembali']));
$total = $data['jumlah1'] + $data['jumlah2'];

$munculcatatan=mysql_query("SELECT * FROM catatan_dinamis WHERE id='1'");
$fetchcatatan=mysql_fetch_array($munculcatatan);


require ("../print/fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
  $pdf->Image('../images/polinema-logo.png',10,5,30);
    $pdf->Image('../images/aknl-logo.png',170,5,30);

    $pdf->SetFont('Times','B',9);
    $pdf->Cell(65);
    $pdf->Cell(30,-2,'KEMENTRIAN RISET DAN TEKNOLOGI');
    $pdf->Ln(3);

    $pdf->SetFont('Times','B',10);
    $pdf->Cell(30);
    $pdf->Cell(30,1,'PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG');
    $pdf->Ln(5);

    $pdf->SetFont('Times','',12);
    $pdf->Cell(40);
    $pdf->Cell(30,1,'RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG');
    $pdf->Ln(5);

    $pdf->SetFont('Times','',8);
    $pdf->Cell(35);
    $pdf->Cell(30,1,'Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp. (0334) 881866 Lumajang - 67311');
    $pdf->Ln(5);

    $pdf->SetFont('Times','',9);
    $pdf->Cell(50);
    $pdf->Cell(30,1,'e-mail : aknlumajang@yahoo.com   dan   aknlumajang@gmail.com');
    $pdf->Ln(5);

    $pdf->Line(10,36,200,36);
    $pdf->Line(11,36,201,36);
    $pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(75);
$pdf->Cell(10,10,"Slip Pinjam");
$pdf->Ln(10);

$pdf->SetFont("Times","",11);
$pdf->Cell(10);
$pdf->Cell(10,10,"Kode Peminjaman");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$kode}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Tgl Pinjam");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$tanggal_pinjam}");
$pdf->Cell(50);
$pdf->Cell(10,10,"Tgl. Kembali");
$pdf->Cell(15);
$pdf->Cell(10,10,":  {$tanggal_kembali}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"NIP");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$data['nomor_induk']}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Nama Peminjam");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$data['nama_peminjam']}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Status");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$data['jabatan']}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Program Studi");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$data['program_studi']}");
$pdf->Cell(50);
$pdf->Cell(10,10,"Kelas");
$pdf->Cell(15);
$pdf->Cell(10,10,":  {$data['kelas_semester']}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Judul Buku");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$data['judul_buku1']}");
$pdf->Cell(50);
$pdf->Cell(10,10,"Jumlah");
$pdf->Cell(15);
$pdf->Cell(10,10,":  {$data['jumlah1']}");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Judul Buku");
$pdf->Cell(20);
$pdf->Cell(10,10,":  {$data['judul_buku2']}");
$pdf->Cell(50);
$pdf->Cell(10,10,"Jumlah");
$pdf->Cell(15);
$pdf->Cell(10,10,":  {$data['jumlah2']}");
$pdf->Ln(5);

$pdf->Cell(100);
$pdf->Cell(10,10,"Total");
$pdf->Cell(15);
$pdf->Cell(10,10,":  {$total}");
$pdf->Ln(8);

$pdf->Cell(10);
$pdf->Cell(10,10,"** {$fetchcatatan['isi']}");
$pdf->Ln(12);

$pdf->Cell(135);
$pdf->Cell(10,10,"Lumajang, {$tanggal_hari_ini}");
$pdf->Ln(18);

$pdf->Cell(135);
$pdf->Cell(10,10,"{$_SESSION['username']}");



$pdf->Output();
?>