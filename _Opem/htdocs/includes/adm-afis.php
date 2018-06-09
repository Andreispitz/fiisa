<?php
if (isset($_POST['petitieid'])){

$Option = $_POST['petitieid'];

$result = mysqli_query($conn,"SELECT * FROM petitii where id=$Option");
	while($row = mysqli_fetch_array($result))
	{
echo"<article class='petitie'>
			<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>
			<p class='autor'>nume</p>
			<p class='destinatar'>".$row['destinatar']."</p>
			
    <div>
			<p class='text_petitie'>
".$row['text_petitie']."
        
			</p> 
    </div>
			
			<p class='nr_semnaturi'>Semnaturi:".$row['nr_semnaturi']."</p>

			<p class='data'>data crearii:".$row['data_C']."</p>
			<p class='data'>data expirarii:".$row['data_e']."</p>
			<p class='data'>numar raportari:".$row['raportari']."</p>
			<form class ='forma_buton' method='get' action='semneaza.html'>
				<button type='submit' class='catre_semneaza'> sterge</button> </form>			
		
	
		</article>
		<hr>";

		include_once'mesaj_petitie_adm.php';
		include_once'raportari_petitie_adm.php';

	
	}
}else
echo"<p></p>";
?>