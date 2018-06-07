
	<?php 
		include_once 'includes/nav_menu.php';
	?>

<div class="all">
	<img class="petitie-background" src="logo3.jpg">
	

	<div class="chenar-petitie">
		
	<div class="divpetitii">
		
		<h2 class="ultimele-petitii">Toate petitiile</h2>
			

			<?php
				include 'includes/generare_petitii.php';
			?>

      <div class="paginare">
      <?php
        include 'includes/paginare.php';
      ?>
			
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

<h3 id="topp">Top petitii</h3>
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