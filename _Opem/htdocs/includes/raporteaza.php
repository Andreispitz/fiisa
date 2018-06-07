<?php

if (isset($_POST['submit'])){

	include 'db_connection.php';
	$first = mysqli_real_escape_string($conn, $_POST['nume']);
	$last = mysqli_real_escape_string($conn, $_POST['prenume']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$idp=mysqli_real_escape_string($conn, $_POST['idp']);
	$mesaj=mysqli_real_escape_string($conn, $_POST['mesaj']);
	if (empty($first) || empty($last) || empty($email)){
		header("Location: ../creare_cont.php?signup=empty");
		exit();
	} else {
		//Verificam daca datele introduse sunt corecte
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../creare_cont.php?signup=invalid");
			exit();
		} else{
			//Verificam daca email-ul este valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../creare_cont.php?signup=email");
				exit();
				} else{
				//Verificam unicitatea email
				$sql = "SELECT * FROM semnaturi WHERE email = '$email'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0){
					header("Location: ../creare_cont.php?signup=multiplesemn");
					exit();
                      }
                      else{

							$sql = "INSERT INTO raportari (nume,prenume,email,mesaj,id_petitie) VALUE ('$first', '$last', '$email','$mesaj','$idp');";
							mysqli_query($conn, $sql);
							$sql1="UPDATE petitii SET raportari =raportari+1 WHERE ID='$idp';";
							mysqli_query($conn, $sql1);
							header("Location: ../index.php");

	
			exit();
		}
	}
}
}
}