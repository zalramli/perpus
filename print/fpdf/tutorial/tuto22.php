<?php
require('../fpdf.php');

class PDF extends FPDF
{

// Load data
function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Simple table
function BasicTable($header, $data)
{
	// Header
	foreach($header as $col)
		
		$this->Cell(40,7,$col,1);
	$this->Ln();
	// Data
	foreach($data as $row)
	{
		foreach($row as $col)
			$this->Cell(40,6,$col,1);
		$this->Ln();
	}
}
// Page header
function Header()
{
	// Logo
	$this->Image('polinema-logo.png',10,5,30);
	$this->Image('aknl-logo.png',170,5,30);

	$this->SetFont('Times','B',9);
	$this->Cell(65);
	$this->Cell(30,-2,'KEMENTRIAN RISET DAN TEKNOLOGI');
	$this->Ln(3);

	$this->SetFont('Times','B',10);
	$this->Cell(30);
	$this->Cell(30,1,'PROGRAM STUDI DILUAR DOMISILI (PDD) POLITEKNIK NEGERI MALANG');
	$this->Ln(5);

	$this->SetFont('Times','',12);
	$this->Cell(40);
	$this->Cell(30,1,'RINTISAN AKADEMI KOMUNITAS NEGERI LUMAJANG');
	$this->Ln(5);

	$this->SetFont('Times','',8);
	$this->Cell(35);
	$this->Cell(30,1,'Sekretariat : SMKN 1 Lumajang, Jln HOS. Cokroaminoto 161 Telp. (0334) 881866 Lumajang - 67311');
	$this->Ln(5);

	$this->SetFont('Times','',9);
	$this->Cell(50);
	$this->Cell(30,1,'e-mail : aknlumajang@yahoo.com   dan   aknlumajang@gmail.com');
	$this->Ln(5);

	$this->Line(10,36,200,36);
	$this->Line(11,36,201,36);
	$this->Ln(10);

}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
// Data loading
$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->AliasNbPages();
$pdf->Output();
?>
