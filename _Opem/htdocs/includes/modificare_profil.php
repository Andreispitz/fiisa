<?php

session_start();

if (isset($_POST['submit'])){
	include 'db_connection.php';

	$email = $_POST['email'];
	$first = $_POST['nume'];
	$last = $_POST['prenume'];
	$id = $_SESSION['u_id'];

	if (empty($email) || empty($first) || empty($last)){
		header("Location: ../contul_meu.php?modificare_profil=empty");
		exit();
	}
	else {
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../contul_meu.php?modificare_profil=invalid");
			exit();
		} else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../contul_meu.php?modificare_profil=email");
				exit();
			} else{
				$sql = "UPDATE users SET user_email = '$email', user_first = '$first', user_last = '$last' WHERE user_id = '$id'";
				mysqli_query($conn, $sql);

				$_SESSION['u_email'] = $email;
				$_SESSION['u_first'] = $first;
				$_SESSION['u_last'] = $last;

				header("Location: ../contul_meu.php?modificare_profil=success");
				exit();
			}
		}
	}
}