<?php

session_start();

if (isset($_POST['submit'])){

	include 'db_connection.php';
	$first = mysqli_real_escape_string($conn, $_SESSION['u_first']);
	$last = mysqli_real_escape_string($conn, $_SESSION['u_last']);
	$email = mysqli_real_escape_string($conn, $_SESSION['u_email']);
	$id_creator = mysqli_real_escape_string($conn, $_SESSION['u_id']);
	$titlu = mysqli_real_escape_string($conn, $_POST['titlu']);
	$destinatar = mysqli_real_escape_string($conn, $_POST['destinatar']);
	$text = mysqli_real_escape_string($conn, $_POST['text']);
	$data_c=mysqli_real_escape_string($conn, date("Y/m/d"));
	$date = date("Y/m/d");
    $newdate = strtotime ( '+1 month' , strtotime ( $date ) ) ;
    $newdate = mysqli_real_escape_string($conn, date ( 'Y-m-j' , $newdate ));

if (empty($titlu) || empty($destinatar) || empty($text) ){
		header("Location: ../creaza.php?eroare=empty");
		exit();
	} else {
		//Verificam daca datele introduse sunt corecte
		if (strlen($titlu)<15 OR strlen($destinatar)<4 OR strlen($text)<120){
			header("Location: ../creaza.php?eroare=strlen");
			exit();
}else{			
		$sql = "INSERT INTO petitii (titlu_petitie, text_petitie,id_creator,destinatar,data_c,data_e) VALUE ('$titlu', '$text','$id_creator','$destinatar','$data_c','$newdate');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php");
					exit();




}
}
}
?>
