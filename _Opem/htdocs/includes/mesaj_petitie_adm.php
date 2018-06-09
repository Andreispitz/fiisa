<?php
echo"<article class='cmesaj'>
<h3 class='ultimele-petitii'>Comentarii</h3>
<hr>";
	$result = mysqli_query($conn,"SELECT * FROM semnaturi where id_petitie=$Option and mesaje is not null");
	while($row = mysqli_fetch_array($result))
	{
        
        echo"<p class ='amesaj'>".$row['Nume'].' '.$row['prenume']."</p>
<p class='tmesaj'>".$row['mesaje']."</p>
<hr> ";

				}
		echo"</article>";
			
?>
