
	<?php 
    include_once 'includes/nav_menu.php';
  ?>


<?php
  // Pagina creaza.php apare doar daca esti logat
  if (isset($_SESSION['u_id'])){
    echo "<div class='all'>
  <img class='petitie-background' src='logo3.jpg'>
  

  <div class='chenar-petitie'>
    
    <div class='divpetitii'>
    
    <h2 class='ultimele-petitii'>Creaza o petitie</h2>
      
      <form action='includes/creeaza.php' method='post'>
  <ul class='chestionar1'>
    <li>
        <label>Titlul petitiei <span class='required'>*</span></label>
        <input type='text'  class='field-divided' name='titlu' />
    </li>

     <li>
        <label>Destinatar <span class='required'>*</span></label>
        <input type='text'  class='field-divided' name='destinatar' />
    </li>

    
    <li>
        <label>Textul petitiei <span class='required'>*</span></label>
        <textarea  id='field5' name='text' class='field-long field-textarea'></textarea>
    </li>
    <li>
        <input type='submit' name='submit' value='Posteaza' />
    </li>
</ul>
</form>";
    
if (isset($_GET['eroare'])){
if($_GET['eroare']=='empty')
  echo"<h3>Exista campuri necompletate!</h3>";
else if($_GET['eroare']=='strlen')
  echo"<h3>Pentru a fi o petitie valida, campurile trebuie sa contina:</h3>
   <p>Titlul->15 caractere </p>
    <p> Destinatarul->10 caractere</p>
    <p>Textul ->120 caractere</p>";
}

echo"    </div>
    
<div class='despre'>
<div class='cautare'>
      <form  action='cauta.php' method='get'>
          <span><input id='input1' type='text' placeholder='..Cauta..' name='cauta'>
          <input type='checkbox' name='avansata' value='1'>av</input>
          <input id='buton_cauta' type='submit' name='submit' value='Cauta' />
          </span>
      </form>
   </div>
<h3 id='topp'>Top SEMNATURI</h3>";
include 'includes/top_semnaturi.php';
echo"</div>";
  }
  else{
    //nothing
  }
?>

</body>

</html>