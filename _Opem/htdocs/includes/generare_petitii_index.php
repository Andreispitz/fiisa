<?php
include 'db_connection.php';

$result = mysqli_query($conn,"SELECT * FROM petitii order by ID desc limit 5");
while($row = mysqli_fetch_array($result))
{
	$id_creator = $row['id_creator'];
	$utilizator = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$id_creator'");
	$utilizatorResult = mysqli_fetch_array($utilizator);
if(strlen($row['text_petitie'])>199)
$text=substr($row['text_petitie'], 0, 199);
else
$text=$row['text_petitie'];

echo"<article class='petitie'>";
			echo"<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>";
			echo"<p class='autor'>Scris de " . $utilizatorResult['user_uid']. "</p>";
			echo"<p class='destinatar'>".$row['destinatar']."</p>";
			
			echo"<p class='text_petitie'>". $text."</p>";
	       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
				<form class='forma_buton' method='get' >
				<a class='catre_semneaza' href='semneaza1.php?id=".$row['ID']."'> Citeste mai mult </a> </form>
			</article>";

		}
		mysqli_close($conn);
?>