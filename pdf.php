<?php

use Alura\Banco\Infra\Conexao;

require_once "Autoload.php";

include 'fpdf.php';

$conexao = new Conexao();

$pessoas = $conexao->consultarTitular();

$pdf = new FPDF("L", "mm", [210, 297]);
$pdf->AddPage("L");
$pdf->SetFont('Arial','B',16);
$pdf->Cell(275,10,utf8_decode('Relatório de Titulares'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",10);
$pdf->Cell(15,7, utf8_decode("Código") ,1,0,"C");
$pdf->Cell(45,7,                   "Nome"    ,1,0,"C");
$pdf->Cell(30,7,                   "CPF"     ,1,0,"C");
$pdf->Cell(45,7,                   "Cidade"  ,1,0,"C");
$pdf->Cell(35,7,                   "Bairro"  ,1,0,"C");
$pdf->Cell(35,7,                   "Rua"     ,1,0,"C");
$pdf->Cell(15,7, utf8_decode("Número") ,1,0,"C");
$pdf->Cell(30,7,                   "Saldo"   ,1,0,"C");
$pdf->Cell(30,7,                   "Conta"   ,1,0,"C");

$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->Cell(15,7,  $pessoa["codigo"] ,1,0,"C");
    $pdf->Cell(45,7,  $pessoa["nome"]   ,1,0,"C");
    $pdf->Cell(30,7,  $pessoa["cpf"]    ,1,0,"C");
    $pdf->Cell(45,7,  $pessoa["cidade"] ,1,0,"C");
    $pdf->Cell(35,7,  $pessoa["bairro"] ,1,0,"C");
    $pdf->Cell(35,7,  $pessoa["rua"]    ,1,0,"C");
    $pdf->Cell(15,7,  $pessoa["numero"] ,1,0,"C");
    $pdf->Cell(30,7,  $pessoa["saldo"]  ,1,0,"C");
    $pdf->Cell(30,7,  $pessoa["conta"]  ,1,0,"C");
    $pdf->Ln();
}

$pdf->Output();