

<form action="toatep.php" method="get">
      <select id="meniu-adm" name="ordonare">
        <option value="0">Ordoneaza dupa:</option>
        <option value="1">Alfabetic</option>
        <option value="2">Semnaturi</option>
        <option value="3">Data adaugarii</option>
      </select>
      <input type="submit" value="Ordoneaza">
      </form>
<?php
if (isset($_GET['ordonare'])){
if($_GET['ordonare']=='0')
$ordonare='data_e';
elseif($_GET['ordonare']=='1')
$ordonare='titlu_petitie';
elseif($_GET['ordonare']=='2')
$ordonare='nr_semnaturi desc';
elseif($_GET['ordonare']=='3')
$ordonare='data_C';
else
$ordonare='data_e';
	}else
	$ordonare='data_e';

include 'db_connection.php';
if(isset($_GET['page']))
    $page=$_GET['page'];
else
	$page=1;
$number=($page*5)-5;
$result = mysqli_query($conn,"SELECT * FROM petitii order by $ordonare limit $number,5");
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
?>