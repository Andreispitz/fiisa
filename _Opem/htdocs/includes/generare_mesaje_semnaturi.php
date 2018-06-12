<?php
include 'db_connection.php';

echo"<article class='cmesaj'>
<h3 class='ultimele-petitii'>Comentarii</h3>
<hr>";

	$idp=$_GET['id'];
	$result = mysqli_query($conn,"SELECT * FROM semnaturi where id_petitie=$idp and mesaje is not null");
	while($row = mysqli_fetch_array($result))
	{
        if ($row['mesaje'] != ""){
        	echo"<p class ='amesaj'>".$row['Nume'].' '.$row['prenume']."</p>
					<p class='tmesaj'>".$row['mesaje']."</p>
					<hr> ";
        }
        

				}
		echo"</article>";
				mysqli_close($conn);
?>


