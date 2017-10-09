<?php
include '../config/connect.php';
$kode = $_GET['ID'];
$query = mysql_query("SELECT * FROM tabel_peminjaman WHERE id='$kode'");
$data = mysql_fetch_array($query);
$tanggal_hari_ini = date("d-m-Y");
$tgl=date("Y-m-d");
$bulan_ini = date("m");
$tahun_ini = date("Y");
$total = $data['jumlah1'] + $data['jumlah2'];

$lama_terlambat = $tgl - $data['tgl_kembali'];

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
$pdf->SetFont("Times","",12);
$pdf->Cell(150);
$pdf->Cell(10,10,"Lumajang, {$tanggal_hari_ini} ");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"No : ... /P/Perpus.Aknl/{$bulan_ini}/{$tahun_ini}");
$pdf->Cell(125);
$pdf->Cell(10,10,"Kepada Yth,");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Lampiran : -");
$pdf->Cell(127);
$pdf->Cell(10,10,$data['nama_peminjam']);
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Perihal : Keterlambatan Pengembalian Buku");
$pdf->Cell(130);
$pdf->Cell(10,10,"Di Lumajang");
$pdf->Ln(10);

$pdf->Cell(16);
$pdf->Cell(10,10,"Dengan Hormat, ");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"Sehubungan dengan Keterlambatan buku yang telah dipinjam saudara, yaitu :");
$pdf->Ln(10);

$pdf->Cell(25);
$pdf->Cell(10,10,"Tanggal Pinjam : {$data['tgl_pinjam']}");
$pdf->Ln(5);

$pdf->Cell(25);
$pdf->Cell(10,10,"Tanggal Kembali : {$data['tgl_kembali']}");
$pdf->Ln(5);

$pdf->Cell(25);
$pdf->Cell(10,10,"Lama Keterlambatan : {$lama_terlambat} hari");
$pdf->Ln(5);

$pdf->Cell(25);
$pdf->Cell(10,10,"Judul Buku 1 : {$data['judul_buku1']}");
$pdf->Cell(75);
$pdf->Cell(10,10,"Jumlah : {$data['jumlah1']}");
$pdf->Ln(5);

$pdf->Cell(25);
$pdf->Cell(10,10,"Judul Buku 2 : {$data['judul_buku2']}");
$pdf->Cell(75);
$pdf->Cell(10,10,"Jumlah : {$data['jumlah2']}");
$pdf->Ln(5);

$pdf->Cell(110);
$pdf->Cell(10,10,"Total    : {$total}");
$pdf->Ln(15);


$pdf->Cell(16);
$pdf->Cell(10,10,"Demikian surat pemberitahuan ini, kami berharap saudara untuk segera mengembalikan ");
$pdf->Ln(5);

$pdf->Cell(10);
$pdf->Cell(10,10,"buku tersebut, atas perhatian serta kerjasama saudara, kami sampaikan terima kasih.");
$pdf->Ln(25);

 $pdf->Line(10,150,200,150);
    $pdf->Line(11,150,201,150);
 $pdf->Ln(15);

	$pdf->Image('../images/polinema-logo.png',10,160,30);
    $pdf->Image('../images/aknl-logo.png',170,160,30);

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
    $pdf->Line(10,192,200,192);
    $pdf->Line(11,192,201,192);
    $pdf->Ln(20);

    $pdf->SetFont('Times','',12);
    $pdf->Cell(16);
	$pdf->Cell(10,10,"Bukti pengembalian buku perpustakaan Akademi Komunitas Negeri Lumajang");
	$pdf->Ln(10);

	$pdf->Cell(25);
	$pdf->Cell(10,10,"Nama Peminjam : {$data['nama_peminjam']}");
	$pdf->Ln(5);

	$pdf->Cell(25);
	$pdf->Cell(10,10,"Judul Buku 1 : {$data['judul_buku1']}");
	$pdf->Cell(75);
	$pdf->Cell(10,10,"Jumlah : {$data['jumlah1']}");
	$pdf->Ln(5);

	$pdf->Cell(25);
	$pdf->Cell(10,10,"Judul Buku 2 : {$data['judul_buku2']}");
	$pdf->Cell(75);
	$pdf->Cell(10,10,"Jumlah : {$data['jumlah2']}");
	$pdf->Ln(5);

	$pdf->Cell(110);
	$pdf->Cell(10,10,"Total    : {$total}");
	$pdf->Ln(9);

	$pdf->Cell(16);
	$pdf->Cell(10,10,"Telah mengembalikan buku dengan judul yang tertera di atas ");
	$pdf->Ln(5);

	$pdf->Cell(16);
	$pdf->Cell(10,10,"Pada tanggal ....... - ....... - .......");
	$pdf->Ln(5);

	$pdf->Cell(160);
	$pdf->Cell(10,10,"Ttd.");
	$pdf->Ln(21);

	$pdf->Cell(145);
	$pdf->Cell(10,10,"Pengurus Perpustakaan");

$pdf->Output();
?>