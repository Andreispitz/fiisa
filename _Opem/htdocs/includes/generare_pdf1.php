


<?php 
if (isset($_POST['raport']))
{
	include_once('fpdf/fpdf.php');
    include 'db_connection.php';
	if ($_POST['raport']=='toate'){
//pentru toate
		if (isset($_POST['PDF'])){
        if($_POST['PDF']==1){
             //pdf
        	$count="SELECT user_uid,titlu_petitie,destinatar,nr_semnaturi,raportari,data_C,data_e from petitii JOIN users ON id_creator=user_id";
$pdf = new FPDF();
$pdf->AddPage();

$width_cell=array(30,65,40,10,10,20,20);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(193,229,252);
$pdf->Cell(195,15,'Statistici pentru toate petitiile',1,1,'C');
//header
$pdf->Cell($width_cell[0],10,'Creator',1,0,'C',true); // First header column 
$pdf->Cell($width_cell[1],10,'Titlu',1,0,'C',true); // Second header column
$pdf->Cell($width_cell[2],10,'Destinatar',1,0,'C',true); // Third header column 
$pdf->Cell($width_cell[3],10,'S',1,0,'C',true); // Fourth header column
$pdf->Cell($width_cell[4],10,'R',1,0,'C',true); // Third header column
$pdf->Cell($width_cell[5],10,'DataC',1,0,'C',true); // Third header column
$pdf->Cell($width_cell[6],10,'DataE',1,1,'C',true); // Third header column   
//header end
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(235,236,236); // Background color of header 
$fill=false; // to give alternate background fill color to rows 

foreach ($conn->query($count) as $row) {
$pdf->Cell($width_cell[0],10,$row['user_uid'],1,0,'L',$fill);
$pdf->Cell($width_cell[1],10,$row['titlu_petitie'],1,0,'C',$fill);
$pdf->Cell($width_cell[2],10,$row['destinatar'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['nr_semnaturi'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['raportari'],1,0,'C',$fill);
$pdf->Cell($width_cell[5],10,$row['data_C'],1,0,'C',$fill);
$pdf->Cell($width_cell[6],10,$row['data_C'],1,1,'C',$fill);
$fill = !$fill; // to give alternate background fill  color to rows
}


mysqli_close($conn);
$pdf->Output();
        }}elseif(isset($_POST['HTML'])){
          echo"<p>HTML toate</p>";
        }else{
        header("Location: ../administrator.php");}

	}else{
//pentru una
		if (isset($_POST['PDF'])){
			//PDF PT 1
			$pid=$_POST['raport'];
include_once('fpdf/fpdf.php');
include 'db_connection.php';
$count="SELECT user_uid,titlu_petitie,destinatar,nr_semnaturi,raportari,data_C,data_e,text_petitie from petitii JOIN users ON id_creator=user_id where ID='$pid'";
$pdf = new FPDF();
$pdf->AddPage();

$width_cell=array(30,65,40,10,10,20,20,195,195);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(193,229,252);
$pdf->Cell(195,15,'Statistici',0,1,'C');
//header
$pdf->Cell($width_cell[0],10,'Creator',1,0,'C',true); // First header column 
$pdf->Cell($width_cell[1],10,'Titlu',1,0,'C',true); // Second header column
$pdf->Cell($width_cell[2],10,'Destinatar',1,0,'C',true); // Third header column 
$pdf->Cell($width_cell[3],10,'S',1,0,'C',true); // Fourth header column
$pdf->Cell($width_cell[4],10,'R',1,0,'C',true); // Third header column
$pdf->Cell($width_cell[5],10,'DataC',1,0,'C',true); // Third header column
$pdf->Cell($width_cell[6],10,'DataE',1,1,'C',true); // Third header column   
//header end
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(235,236,236); // Background color of header 
$fill=false; // to give alternate background fill color to rows 

foreach ($conn->query($count) as $row) {
$pdf->Cell($width_cell[0],10,$row['user_uid'],1,0,'L',$fill);
$pdf->Cell($width_cell[1],10,$row['titlu_petitie'],1,0,'C',$fill);
$pdf->Cell($width_cell[2],10,$row['destinatar'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['nr_semnaturi'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['raportari'],1,0,'C',$fill);
$pdf->Cell($width_cell[5],10,$row['data_C'],1,0,'C',$fill);
$pdf->Cell($width_cell[6],10,$row['data_C'],1,1,'C',$fill);
$pdf->Cell($width_cell[7],10,'Text petitie',0,1,'C',$fill);
$pdf->Multicell($width_cell[8],5,$row['text_petitie'],1,1,'C',$fill);
$fill = !$fill; // to give alternate background fill  color to rows
}
$pdf->Cell(195,15,'Comentarii',0,1,'C');
$count="SELECT Nume,prenume,email,mesaje from semnaturi where id_petitie='$pid'";
$width_cell1=array(30,30,40,90);
foreach ($conn->query($count) as $row) {
$pdf->Cell($width_cell1[0],10,$row['Nume'],1,0,'L',$fill);
$pdf->Cell($width_cell1[1],10,$row['prenume'],1,0,'C',$fill);
$pdf->Cell($width_cell1[2],10,$row['email'],1,0,'C',$fill);
$pdf->Multicell($width_cell1[3],10,$row['mesaje'],1,1,'C',$fill);
$fill = !$fill; // to give alternate background fill  color to rows
}
mysqli_close($conn);
$pdf->Output();
		}elseif(isset($_POST['HTML'])){
          echo"<p>HTML una</p>";
        }else{
        header("Location: ../administrator.php");}

	}
}
else
	header("Location: ../index.php");
?>