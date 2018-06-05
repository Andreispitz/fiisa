<?php
	include 'db_connection.php';

	$idp=$_GET['id'];
	$result = mysqli_query($conn,"SELECT * FROM petitii where id=$idp");
	while($row = mysqli_fetch_array($result))
	{

		$id_creator = $row['id_creator'];
		$utilizator = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$id_creator'");
		$utilizatorResult = mysqli_fetch_array($utilizator);

		echo"<article class='petitie'>";
					echo"<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>";
					echo"<p class='autor'>Scris de " .$utilizatorResult['user_uid']."</p>";
					echo"<p class='destinatar'>".$row['destinatar']."</p>";
					
					echo"<p class='text_petitie'>". $row['text_petitie'] ."</p>";
			       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
						<form class='forma_buton' method='get' action=''>";
						echo"<button type='submit' class='catre_semneaza'>Distribuie</button> </form>
					</article>";

				}
				mysqli_close($conn);
?>