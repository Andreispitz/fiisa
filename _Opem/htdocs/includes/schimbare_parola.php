<?php

session_start();

if (isset($_POST['submit'])){

	include 'db_connection.php';

	$currentPass = $_POST['currentPass'];
	$newPass = $_POST['newPass'];
	$confirmNewPass = $_POST['confirmNewPass'];
	$id = $_SESSION['u_id'];

	if (empty($currentPass) || empty($newPass) || empty($confirmNewPass)){
		header("Location: ../contul_meu.php?contul_meu=empty");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE user_id='$id'";
		$result = mysqli_query($conn,$sql);
		
		if ($row = mysqli_fetch_assoc($result)){

			//Verificam daca parola este in baza de date
			if (password_verify($currentPass,$row['user_pwd']) == FALSE){
				header("Location: ../contul_meu.php?contul_meu=error");
				exit();
			} else {
				//Verificam daca parolele noi sunt la fel
				if (strcmp($newPass, $confirmNewPass) !== 0){
					header("Location: ../contul_meu.php?contul_meu=no_match");
					exit();
				}
				else {

					$hashedPwd = password_hash($newPass, PASSWORD_DEFAULT);
					$sql = "UPDATE users SET user_pwd='$hashedPwd' WHERE user_id='$id'";
					mysqli_query($conn,$sql);
					header("Location: ../contul_meu.php?contul_meu=succes");
					exit();
				}
			}

		}
		
	}


} else {
	header("Location: ../contul_meu.php?contul_meu=error");
	exit();
}

