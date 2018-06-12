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
					echo"<p class='destinatar'> Catre ".$row['destinatar']."</p>";
					
					echo"<p class='text_petitie'>". $row['text_petitie'] ."</p>";
			       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
						<form class='forma_buton' method='get' action=''>";
						echo'<div class="fb-share-button" data-href="http://127.0.0.1/semneaza1.php?id=' . $idp.'" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Distribuie</a></div>

						</form>';
					echo"<a class='catre_semneaza' href='semneaza1.php?id=".$idp."&raporteaza=1"."'>Raporteaza</a>
					</article>";

				}
				mysqli_close($conn);
?>