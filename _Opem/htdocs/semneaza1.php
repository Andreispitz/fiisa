<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

  <?php
    function unicitate_semnatura(){
      $ok = 1;
      if (isset($_SESSION['u_id'])){

        include 'includes/db_connection.php';
        $email = $_SESSION['u_email'];
        $idp = $_GET['id'];
        $sql = "SELECT * from semnaturi WHERE email = '$email' AND id_petitie = '$idp'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck == 0)
        {
          $ok = 0;
        }
      }
      return $ok;
    }
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
<H3>SEMNEAZA</H3>

    <?php


      if (isset($_SESSION['u_id'])){

        $signed = unicitate_semnatura();
        if ($signed == 1) {
              echo '<div class="">
                <p style="color:red; text-align:center;">Petitia a fost deja semnata <p>
              </div>';
        } else {
          echo '<form action="includes/semneaza_logat.php" method="post">
              <ul class="chestionar1">
                  <li>
                      <label>Comentariu</label>
                      <textarea  id="field5" name="mesaj" class="field-long field-textarea"></textarea>
                  </li>';
                    echo '<input type="hidden" name="idp" value="' . $_GET["id"].' "/> ';
                    echo '<input type="submit" name="submit" value="Semneaza ca ' . $_SESSION["u_uid"] . '" />';
        }
      
      } else {
        echo '<form action="includes/semneaza.php" method="post">
              <ul class="chestionar1">
                  <li><label>Nume | Prenume<span class="required">*</span></label><input type="text" name="nume" class="field-divided" placeholder="Prenume" />&nbsp;<input type="text" name="prenume" class="field-divided" placeholder="Nume" /></li>
                  <li>
                      <label>Email <span class="required">*</span></label>
                      <input type="email" name="email" class="field-long" />
                  </li>
                  <li>
                      <label>Comentariu</label>
                      <textarea  id="field5" name="mesaj" class="field-long field-textarea"></textarea>
                  </li>';
                    echo '<input type="hidden" name="idp" value="' . $_GET["id"].' "/> ';
                    echo '<input type="submit" name="submit" value="Semneaza" />';
      }
if (isset($_GET['eroareS'])){
if($_GET['eroareS']=='invalidnm')
  echo"<h3>Nume sau prenume invalid!(doar litere)</h3>";
else if($_GET['eroareS']=='empty')
    echo"<h3>Campuri necompletate</h3>";
else if($_GET['eroareS']=='strlen')
  echo"<h3>Pentru a fi o petitie valida, campurile trebuie sa contina:</h3>
   <h3>Motiv->30 caractere </h3>";
   else if($_GET['eroareS']=='sx2')
     echo"<h3>Ai semnat deja odata!</p></h3>";
 else if ($_GET['eroareS']=='none')
echo"<h3>Motiv trimis!</p></h3>";
}
    ?>


		<h3>TOP SEMNATURI</h3>
	<?php	include 'includes/top_semnaturi.php'; ?>
		</div>

	</div>
<?php echo $signed?>
</div>

</body>

</html>