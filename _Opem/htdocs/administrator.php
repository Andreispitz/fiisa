<?php
  include_once 'includes/nav_menu.php';
?>

<?php

  if(isset($_POST['submit'])){
    $id = $_POST['petitie'];
    //$_SESSION['id_petitie'] = $id;
    //echo $id;
  }
  ?>



<div class="all">
	<img class="petitie-background" src="logo3.jpg">
	

	<div class="chenar-petitie">
		
		<div class="divpetitii">
		<div class="meniu-admin">
		<h2 class="ultimele-petitii">Raport</h2>

<form action="includes/generare_pdf1.php" method="POST">
      <span><select id="meniu-adm" name="raport">
        <option value="toate">Toate petitiile</option>
       
       <?php include_once 'includes/generare_option.php'; ?> 
      </select>
      <input type="checkbox" name="PDF" value="1"> PDF</input>
      <input type="checkbox" name="HTML" value="1"> HTML</input></span>
      <input type="submit" name="submit" value="Genereaza">
    </form>


<hr>

			
			</div>
				<div class="chenar-administrator">
        <h2 class="ultimele-petitii">selectare petitie</h2>

<form action="administrator.php" method="POST">
      <select id="meniu-adm" name="petitieid">
        <option value="0">Selectare:</option>
   <?php include_once 'includes/generare_option1.php'; ?>
      </select>
      <input type="submit" name="submit" value="Afiseaza">
      </form>

<br>
  <?php include_once 'includes/adm-afis.php'; ?>
  <?php 
   if(isset($_GET['sters'])){
    echo"<h3>Petitia a fost stearsa!</h3?";
   }
?>
		</div>
		</div>
		
<div class="despre">


			<div class="cautare">
      <form  action="cauta.php" method="get">
          <span><input id="input1" type="text" placeholder="..Cauta.." name="cauta">
          <input type="checkbox" name="avansata" value="1">av</input>
          <input type="submit" name="submit" value="Cauta" />
          </span>
      </form>
   </div>
		<h3 id="topp">Top petitii semnate</h3>
		<h3>TOP SEMNATURI</h3>
  <?php include 'includes/top_semnaturi.php'; ?>


<h3 id="topp">Top petitii raportate</h3>
  <?php include 'includes/top_raportari.php'; ?>

		
		</div>

	</div>

</div>

</body>

</html>