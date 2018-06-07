<?php
	include_once 'includes/nav_menu.php';
?>

<div class="all">
	<img class="petitie-background" src="logo3.jpg">
	

	<div class="chenar-petitie">
		
		<div class="divpetitii">
		
		<h2 class="ultimele-petitii">Citeste si semneaza</h2>
			
			<?php 
		include_once 'includes/deschide_pagina_petitie.php';
	?>
			
		
		</div>
		
<div class="despre">

<div class="cautare">
    	<form  action="cauta.php" method="get">
          <span><input id="input1" type="text" placeholder="..Cauta.." name="cauta">
          <input type="submit" name="submit" value="Cauta" />
          </span>
      </form>
 	 </div>

					<form action="includes/semneaza.php" method="post">
<ul class="chestionar1">
    <li><label>Nume | Prenume<span class="required">*</span></label><input type="text" name="nume" class="field-divided" placeholder="Prenume" />&nbsp;<input type="text" name="prenume" class="field-divided" placeholder="Nume" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="email" class="field-long" />
    </li>
    
    <li>
       <input type='hidden' name='idp' value='<?php echo $_GET['id'];?>'/> 
        <input type="submit" name="submit" value="Semneaza" />
    </li>
</ul>
</form>

		<h3>Aici o sa vedem ce adaugam la urma sa arate bine</h3>
		<h3 id="topp">Vezi si</h3>
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