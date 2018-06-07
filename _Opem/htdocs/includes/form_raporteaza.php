

<?php

if (isset($_GET['raporteaza'])){
    echo"<h3>Formular RAPORTARE</H3>";
echo"<form action='includes/raporteaza.php' method='post'>
<ul class='chestionar1'>
    <li><label>Nume | Prenume<span class='required'>*</span></label>
    <input type='text'  class='field-divided' name='nume' />&nbsp;<input type='text' name='prenume' class='field-divided'  /></li>
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