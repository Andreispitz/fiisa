<!--Pentru fiecare camp se aplica functia de validare cu cei 3 parametri
nume form, numele inputului si id-ul span-ului -->
<script src="includes/schimbareParola.js"></script>

<?php
	include_once 'includes/nav_menu.php';
?>
	
<div>
	<h2 id="creare-cont">Creare cont</h2>
</div>

<div class="creare-container">
	<form action="includes/signup.php" method="POST" name="creare_cont">
		<ul class="chestionar_creeaza">
			<li>Nume</li>
			<input type="text" name="first" onblur="validare_camp('creare_cont','first','field1')">
			<span id="field1"></span>
			<li>Prenume</li>
			<input type="text" name="last" onblur="validare_camp('creare_cont','last','field2')">
			<span id="field2"></span>
			<li>Email</li>
			<input type="text" name="email" onblur="validare_camp('creare_cont','email','field3')">
			<span id="field3"></span>
			<li>Nume utilizator</li>
			<input type="text" name="uid" onblur="validare_camp('creare_cont','uid','field4')">
			<span id="field4"></span>
			<li>Parola</li>
			<input type="password" name="pwd" onblur="validare_camp('creare_cont','pwd','field5')">
			<span id="field5"></span>
			<br>
			<button id="buton_login" type="submit" name="submit">Creare</button>
		</ul>
	</form>
	<?php
     if (isset($_GET['signup'])){
         if($_GET['signup']=='empty')
           echo"<h3 class='eroare'>Campuri necompletate</h3>";
            else if($_GET['signup']=='invalid')
            echo"<h3 class='eroare'>Date incorecte(doar litere in nume si prenume)</h3>";
            else if($_GET['signup']=='email')
            echo"<h3 class='eroare'>Email scris gresit</h3>";
             else if($_GET['signup']=='taken')
              echo"<h3 class='eroare'>Email sau nume utilizator deja folosite</h3>";  
              else if($_GET['signup']=='succes')
              echo"<h3 class='eroare'>Succes!</h3>";     
}
?>
</div>



</body>


</html>