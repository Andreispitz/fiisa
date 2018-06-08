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

  $query = "SELECT * FROM petitii";
  $result = mysqli_query($conn,$query);

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

    <form action="" method="POST">
      <select id="meniu-adm" name="petitie">
        <option value="">Selecteaza Petitia</option>
        
        <?php while($row = mysqli_fetch_array($result)){
          echo '<option value = "' . $row['ID'] .'">' . $row['titlu_petitie'] . '</option>';
        } 

         ?>
      </select>
      <input type="submit" name="submit" value="Afiseaza">
    </form>


			
			</div>
				<div class="chenar-administrator">
<article class="petitie">
			<h3 class ="titlu_petitie"><?php echo $row2['titlu_petitie'];?></h3>
			<p class="autor">Scris de <?php echo $row3['user_uid']?></p>
			<p class="destinatar">Catre <?php echo $row2['destinatar']?> </p>
			
    <div>
			<p class="text_petitie">

        <?php 
          echo $row2['text_petitie'];
      ?>
			</p> 
    </div>
			
			<p class="nr_semnaturi"> SEMNATURI:<?php echo $row2['nr_semnaturi']?></p>

			<p class="data"> data crearii: <?php echo $row2['data_C']?></p>
			<p class="data"> data expirarii:<?php echo $row2['data_e']?> </p>
			<p class="data"> numar raportari:<?php echo $row2['raportari']?></p>
			<form class ="forma_buton" method="get" action="semneaza.html">
				<button type="submit" class="catre_semneaza"> sterge</button> </form>			</div>
		
		

	</article>
		
		</div>
		
<div class="despre">


				<div class="cautare">
    	<form>
      		<input id="input1" type="text" placeholder="..Cauta.." name="cauta">
    	</form>
 	 </div>

		<h3 id="topp">Top petitii semnate</h3>
		
  <table id="table1">
  <tr class="topt">
    <th>Titlu</th>
    <th>Semnaturi</th>
  </tr>
  <tr>
    <td><a href="...">Impotriva Abuzului</a></td>
    <td>5000</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
</table>


<h3 id="topp">Top petitii raportate</h3>
		
  <table id="table1">
  <tr class="topt">
    <th>Titlu</th>
    <th>Semnaturi</th>
  </tr>
  <tr>
    <td><a href="...">Impotriva Abuzului</a></td>
    <td>5000</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
</table>

<h3 id="topp">Ultimele petitii adaugate</h3>
		
  <table id="table1">
  <tr class="topt">
    <th>Titlu</th>
    <th>Semnaturi</th>
  </tr>
  <tr>
    <td><a href="...">Impotriva Abuzului</a></td>
    <td>5000</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
  <tr>
    <td><a href="...">Impotriva BLABLA</a></td> 
    <td>940</td>
  </tr>
</table>
		</div>

	</div>

</div>

</body>

</html>