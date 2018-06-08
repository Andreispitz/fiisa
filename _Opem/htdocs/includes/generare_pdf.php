<?php 
include_once('fpdf/fpdf.php');
include 'db_connection.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

$result = mysqli_query($conn,"SELECT * FROM petitii ");
	while($row = mysqli_fetch_array($result))
	{
		$titlu = $row['titlu_petitie'];
$pdf->Cell(400,10,$titlu);


}
mysqli_close($conn);
$pdf->Output();
?>