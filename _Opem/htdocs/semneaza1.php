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
		  
      <?php 
    include_once 'includes/form_raporteaza.php';
  ?>	
  <?php 
    include_once 'includes/generare_mesaje_semnaturi.php';
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
<H3>SEMNEAZA</H3>
					<form action="includes/semneaza.php" method="post">
<ul class="chestionar1">
    <li><label>Nume | Prenume<span class="required">*</span></label><input type="text" name="nume" class="field-divided" placeholder="Prenume" />&nbsp;<input type="text" name="prenume" class="field-divided" placeholder="Nume" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="email" class="field-long" />
    </li>
    <li>
        <label>Comentariu</label>
        <textarea  id='field5' name='mesaj' class='field-long field-textarea'></textarea>
    </li>
    
    <li>
       <input type='hidden' name='idp' value='<?php echo $_GET['id'];?>'/> 
        <input type="submit" name="submit" value="Semneaza" />
    </li>
</ul>
</form>


		<h3>TOP SEMNATURI</h3>
	<?php	include 'includes/top_semnaturi.php'; ?>
		</div>

	</div>

</div>

</body>

</html>