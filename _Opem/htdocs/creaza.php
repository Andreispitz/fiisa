
	<?php 
    include_once 'includes/nav_menu.php';
  ?>


<?php
  // Pagina creaza.php apare doar daca esti logat
  if (isset($_SESSION['u_id'])){
    echo '<div class="all">
  <img class="petitie-background" src="logo3.jpg">
  

  <div class="chenar-petitie">
    
    <div class="divpetitii">
    
    <h2 class="ultimele-petitii">Creaza o petitie</h2>
      
      <form action="includes/creeaza.php" method="post">
  <ul class="chestionar1">
    <li>
        <label>Titlul petitiei <span class="required">*</span></label>
        <input type="text"  class="field-divided" name="titlu" />
    </li>

     <li>
        <label>Destinatar <span class="required">*</span></label>
        <input type="text"  class="field-divided" name="destinatar" />
    </li>

    
    <li>
        <label>Textul petitiei <span class="required">*</span></label>
        <textarea  id="field5" name="text" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <input type="submit" name="submit" value="Posteaza" />
    </li>
</ul>
</form>
    
    </div>
    
<div class="despre">
<div class="cautare">
      <form>
          <input id="input1" type="text" placeholder="..Cauta.." name="cauta">
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

</div>';
  }
  else{
    //nothing
  }
?>

</body>

</html>