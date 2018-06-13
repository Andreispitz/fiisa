
	<?php 
		include_once 'includes/nav_menu.php';
	?>

<div class="all">
	<img class="petitie-background" src="logo3.jpg">
	

	<div class="chenar-petitie">
		
		<div class="divpetitii">
		
		<h2 class="ultimele-petitii">Petitii gasite pentru: <?php echo $_GET['cauta'] ?></h2>

<?php 
		include_once 'includes/search.php';
	?>

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

		<p class="text2"> Sa se realizeze o aplicatie Web care permite crearea si gestionarea de petitii online. Administratorul sitului va putea avea acces la rapoarte privind starea petitiilor, numarul de solicitanti, destinatarii petitiilor, data de expirare a unei cauze, petitii similare etc. O persoana nu va putea semna de mai multe ori o petitie. De asemenea, se va oferi suport pentru cautarea multi-criteriala si partajarea datelor pe minim o retea sociala. Rapoartele generate vor fi disponibile in formatele HTML si PDF. Noile petitii disponibile vor fi semnalate via un flux de stiri in format Atom.</p>

		<h3 class="text2">Aici o sa adaugam detalii despre aplicatie si regulament</h3>
		</div>

	</div>

</div>

</body>

</html>