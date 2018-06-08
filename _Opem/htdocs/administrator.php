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

<?php

  include_once 'includes/db_connection.php';


  $sql = "SELECT * FROM petitii WHERE ID = '$id'";
  $result2 = mysqli_query($conn,$sql);
  $row2 = mysqli_fetch_array($result2);
  
  $id_creator = $row2['id_creator'];
  $sql2 = "SELECT * FROM users WHERE user_id = '$id_creator'";
  $result3 = mysqli_query($conn,$sql2);
  $row3 = mysqli_fetch_array($result3);
          

?>

<div class="all">
	<img class="petitie-background" src="logo3.jpg">
	

	<div class="chenar-petitie">
		
		<div class="divpetitii">
		<div class="meniu-admin">
		<h2 class="ultimele-petitii">Raport</h2>

<form action="includes/generare_pdf.php" method="POST">
      <span><select id="meniu-adm" name="petitie">
        <option value="">Raport  pentru:</option>
        <option value="">Toate petitiile</option>
        <?php 
           $query_c = "SELECT * FROM petitii";
           $result_c = mysqli_query($conn,$query_c);
        while($row = mysqli_fetch_array($result_c)){
          echo '<option value = "' . $row['ID'] .'">' . $row['titlu_petitie'] . '</option>';
        } 
          mysqli_close($conn);
         ?>
      </select>
      <input type="checkbox" name="PDF" value="1"> PDF</input>
      <input type="checkbox" name="HTML" value="1"> HTML</input></span>
      <input type="submit" name="submit" value="Genereaza">
    </form>


<hr>

			
			</div>
				<div class="chenar-administrator">
        <h2 class="ultimele-petitii">selectare petitie</h2>

<form action="" method="POST">
      <select id="meniu-adm" name="petitie">
        <option value="">Selectare:</option>
        <?php 
             $query = "SELECT * FROM petitii";
             $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)){
          echo '<option value = "' . $row['ID'] .'">' . $row['titlu_petitie'] . '</option>';
        } 
         ?>
      </select>
      <input type="submit" name="submit" value="Afiseaza">
      </form>

<br>

		</div>
		</div>
		
<div class="despre">


			<div class="cautare">
      <form  action="cauta.php" method="get">
          <span><input id="input1" type="text" placeholder="..Cauta.." name="cauta">
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