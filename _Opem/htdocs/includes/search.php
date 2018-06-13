<?php
if (!empty($_GET['cauta'])){
	if (empty($_GET['avansata'])){
	include 'db_connection.php';
	
	
	$cautare=$_GET['cauta'];

	$result = mysqli_query($conn,"SELECT * FROM petitii where titlu_petitie like '%$cautare%'");
while($row = mysqli_fetch_array($result))
{


echo"<article class='petitie'>";
			echo"<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>";
			echo"<p class='autor'>Scris de User</p>";
			echo"<p class='destinatar'>".$row['destinatar']."</p>";
			
			echo"<p class='text_petitie'>". $row['text_petitie'] ."</p>";
	       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
				<form class='forma_buton' method='get' >
				<a class='catre_semneaza' href='semneaza1.php?id=".$row['ID']."'> Citeste mai mult </a> </form>
			</article>";

		}

		mysqli_close($conn);

}else{
	include 'db_connection.php';	
	$cautare = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", strtolower($_GET['cauta']))));
     $cuvinte = explode(" ", $cautare);
     $counter=substr_count($cautare, ' ');
	$result = mysqli_query($conn,"SELECT * FROM petitii");
while($row = mysqli_fetch_array($result))
{
$scor=0;
$text=trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", strtolower($row['text_petitie']))));
for ($i = 0; $i <= $counter; $i++) {
	if (strpos($text, $cuvinte[$i]) !== false) {
    $scor=$scor+1;
}

}

if($scor==$counter+1){
	echo"<article class='petitie'>";
			echo"<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>";
			echo"<p class='autor'>Scris de User</p>";
			echo"<p class='destinatar'>".$row['destinatar']."</p>";
			
			echo"<p class='text_petitie'>". $row['text_petitie'] ."</p>";
	       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
				<form class='forma_buton' method='get' >
				<a class='catre_semneaza' href='semneaza1.php?id=".$row['ID']."'> Citeste mai mult </a> </form>
			</article>";
}

}
}
}
?>
