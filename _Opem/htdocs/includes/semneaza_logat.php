<?php

session_start();

	if(isset($_POST['submit'])){
		include 'db_connection.php';
		
		$first = $_SESSION['u_first'];
		$last = $_SESSION['u_last'];
		$email = $_SESSION['u_email'];
		$mesaj = mysqli_real_escape_string($conn, $_POST['mesaj']);
		$idp=mysqli_real_escape_string($conn, $_POST['idp']);

		$sql = "SELECT * from semnaturi WHERE email = '$email' AND id_petitie = '$idp'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			header("Location: ../semneaza1.php?id=" . $idp);
			exit();
		} else {
			$sql = "INSERT INTO semnaturi (nume,prenume,email,id_petitie,mesaje) VALUE ('$first', '$last', '$email','$idp','$mesaj');";
			mysqli_query($conn, $sql);
			$sql1="UPDATE petitii SET nr_semnaturi = 1+nr_semnaturi WHERE ID='$idp';";
			mysqli_query($conn, $sql1);
			header("Location: ../semneaza1.php?id=" . $idp");
		}
	}