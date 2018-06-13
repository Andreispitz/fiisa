<?php

if (isset($_POST['submit'])){

	include_once 'db_connection.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	// Verificam daca sunt campuri libere
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
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
				//Verificam unicitatea user_id-ului
				$sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email = '$email'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0){
					header("Location: ../creare_cont.php?signup=taken");
					exit();
				} else {
					// Hash pentru parola
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

					//Toate datele de pana acum au fost introduse corecte
					//Introducem datele in baza de date

					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUE ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../logare.php?signup=succes");
					exit();
				}
			}
		}
	}

} else{
	header("Location: ../creare_cont.php");
	exit();
}

