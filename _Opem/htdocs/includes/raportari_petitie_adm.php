<?php

echo"<article class='cmesaj'>
<h3 class='ultimele-petitii'>Raportari</h3>
<hr>";
	$result = mysqli_query($conn,"SELECT * FROM raportari where id_petitie=$Option and mesaj is not null");
	while($row = mysqli_fetch_array($result))
	{
        
        echo"<p class ='amesaj'>".$row['Nume'].' '.$row['prenume']."</p>
<p class='tmesaj'>".$row['mesaj']."</p>
<hr> ";

				}
		echo"</article>";
				mysqli_close($conn);
?>
