<?php
require('../print/fpdf/fpdf.php');

class PDF extends FPDF
{

function Header()
{
    $this->Image('../images/polinema-logo.png',25,5,30);
    $this->Image('../images/aknl-logo.png',235,5,30);

    $this->SetFont('Times','B',10);
    $this->Cell(100);
    $this->Cell(30,-2,'KEMENTRIAN RISET DAN TEKNOLOGI');
    $this->Ln(3);

    $this->SetFont('Times','B',11);
    $this->Cell(60);
    $this->Cell(30,1,'PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG');
    $this->Ln(5);

    $this->SetFont('Times','',13);
    $this->Cell(80);
    $this->Cell(30,1,'RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG');
    $this->Ln(5);

    $this->SetFont('Times','',9);
    $this->Cell(60);
    $this->Cell(30,1,'Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp. (0334) 881866 Lumajang - 67311');
    $this->Ln(5);

    $this->SetFont('Times','',10);
    $this->Cell(80);
    $this->Cell(30,1,'e-mail : aknlumajang@yahoo.com   dan   aknlumajang@gmail.com');
    $this->Ln(10);

    $this->Line(25,36,265,36);
    $this->Line(25,36,265,36);
    $this->Ln(3);

    $this->SetFont('Times','B',13);
    $this->Cell(90);
    $this->Cell(30,1,'REKAPITULASI PEMINJAMAN BUKU');
    $this->Ln(5);

    $this->SetFont('Times','B',13);
    $this->Cell(80);
    $this->Cell(30,1,'AKADEMI KOMUNITAS NEGERI LUMAJANG');
    $this->Ln(5);

    //Ensure table header is output
    parent::Header();
}

// membaca data dari database

function LoadData()
{
    $data=array();
    include '../config/connect.php';

    $query = "SELECT tgl_pinjam,nama_peminjam,nomor_induk,jabatan,program_studi,kelas_semester,judul_buku1,jumlah1,judul_buku2,jumlah2 FROM tabel_peminjaman";
    $hasil = mysql_query($query);
    $i = 0;
    while ($fetchdata = mysql_fetch_row($hasil))
    {
	$i++; // membuat counter 1, 2, 3, ... untuk ditampilkan
      array_unshift($fetchdata,$i);
	$data[] = $fetchdata;	
    }
    return $data;
}

// function untuk menampilkan tabel

function TabelBiasa($header,$data)
{
    // setting lebar masing-masing kolom dalam mm	
    $w=array(10,20,40,31,18,27,16,50,10,48,10); 
    
    // membuat kepala tabel
    for($i=0;$i<count($header);$i++)
    {
	$this->SetFillColor(255,255,255);  
// setting huruf bold pada kepala tabel
  	$this->SetFont('Arial','B',10);    
// parameter L menunjukkan teks rata kiri pada setiap 
// sel kepala tabel
      $this->Cell($w[$i],7,$header[$i],1,0,'C',1);    
    }
    $this->Ln();
    
    // menampilkan data
    // setting jenis font pada data tabel
	
    $this->SetFont('Times','',10);     	
    foreach($data as $row)
    {
	for($i=0;$i<=sizeof($w)-1;$i++) 
	    $this->Cell($w[$i],6,$row[$i],1,0,'C',1); 
      $this->Ln();
    }
    // penutup tabel
    $this->Cell(array_sum($w),0,'','T');
}

}

$pdf=new PDF('L','mm',array(210,297));
// nama-nama kolom untuk kepala tabel
$header=array('No','Tgl. pinjam','Nama Peminjam','Nomor Induk','Status','Program Studi','Kelas','Judul Buku','Jml','Judul Buku','Jml');

// memanggil function untuk baca data
$data=$pdf->LoadData();

$pdf->AddPage();

// memanggil function untuk menampilkan tabel
$pdf->TabelBiasa($header,$data);
$pdf->Output();
?>
