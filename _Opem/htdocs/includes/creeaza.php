<?php

session_start();

if (isset($_POST['submit'])){

	include 'db_connection.php';
	$first = $_SESSION['u_first'];
	$last = $_SESSION['u_last'];
	$email = $_SESSION['u_email'];
	$id_creator = $_SESSION['u_id'];
	$titlu = mysqli_real_escape_string($conn, $_POST['titlu']);
	$destinatar = mysqli_real_escape_string($conn, $_POST['destinatar']);
	$text = mysqli_real_escape_string($conn, $_POST['text']);
	$data_c=date("Y/m/d");
	$date = date("Y/m/d");
    $newdate = strtotime ( '+1 month' , strtotime ( $date ) ) ;
    $newdate = date ( 'Y-m-j' , $newdate );



					$sql = "INSERT INTO petitii (titlu_petitie, text_petitie,id_creator,destinatar,data_c,data_e) VALUE ('$titlu', '$text','$id_creator','$destinatar','$data_c','$newdate');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php");
					exit();

}

