<?php
	include_once 'includes/nav_menu.php';
?>
	
<div>
	<h2 id="creare-cont">Creare cont</h2>
</div>

<div class="creare-container">
	<form action="includes/signup.php" method="POST">
		<ul class="chestionar_creeaza">
			<li>Nume</li>
			<input type="text" name="first">
			<li>Prenume</li>
			<input type="text" name="last">
			<li>Email</li>
			<input type="text" name="email">
			<li>Nume utilizator</li>
			<input type="text" name="uid">
			<li>Parola</li>
			<input type="password" name="pwd">
			<br>
			<button type="submit" name="submit">Creare</button>
		</ul>
	</form>
</div>



</body>


</html>