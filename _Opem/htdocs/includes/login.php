<?php

session_start();

if (isset($_POST['submit'])){
	
	include 'db_connection.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($uid) || empty($pwd)){
		header("Location: ../logare.php?login=empty");
		exit();
	} else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1){
			header("Location: ../logare.php?login=ue");
			exit();
		} else{
			if ($row = mysqli_fetch_assoc($result)){
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);

				if ($hashedPwdCheck == false){
					header("Location: ../logare.php?login=pass");
					exit();
				} elseif($hashedPwdCheck == true){
					//Utilizatorul se autentifica aici
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];

					if ($row['user_admin'] == 0){
						$_SESSION['u_admin'] = 0;
						header("Location: ../contul_meu.php");
						exit();
					} else if ($row['user_admin'] == 1) {
						$_SESSION['u_admin'] = 1;
						header("Location: ../contul_meu.php");
						exit();
					}

				}
			}
		}
	}


} else{
	header("Location: ../logare.php?login=error");
	exit();
}