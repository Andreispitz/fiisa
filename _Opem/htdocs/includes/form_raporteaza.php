

<?php

if (isset($_GET['eroare'])){
if($_GET['eroare']=='invalidnm')
  echo"<h3>Nume sau prenume invalid!(doar litere)</h3>";
else if($_GET['eroare']=='empty')
    echo"<h3>Campuri necompletate</h3>";
else if($_GET['eroare']=='strlen')
  echo"<h3>Pentru a fi o petitie valida, campurile trebuie sa contina:</h3>
   <h3>Motiv->30 caractere </h3>";
   else if($_GET['eroare']=='rx2')
     echo"<h3>Ai raportat deja odata!</p></h3>";
 else if ($_GET['eroare']=='none')
echo"<h3>Motiv trimis!</p></h3>";
}


if (isset($_GET['raporteaza'])){
    echo"<h3>Formular RAPORTARE</H3>";
echo"<form action='includes/raporteaza.php' method='post'>
<ul class='chestionar1'>
    <li><label>Nume<span class='required'>*</span></label>
    <input type='text'  class='field-divided' name='nume' />&nbsp;
    <label>Prenume<span class='required'>*</span></label>
    <input type='text' name='prenume' class='field-divided'  /></li>
    <li>
        <label>Email <span class='required'>*</span></label>
        <input type='email' name='email' class='field-long' />
    </li>
    <li>
        <label>Motiv raport <span class='required'>*</span></label>
        <textarea  id='field5' name='mesaj' class='field-long field-textarea'></textarea>
    </li>
    <li>
    <input type='hidden' name='idp' value='".$_GET['id']."'/>
    <input type='hidden' name='raporteaza' value='0'/>
        <input type='submit' name='submit' value='Raporteaza' />
    </li>
</ul>
</form>";
}
?>