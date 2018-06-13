
    <?php 
        include_once 'includes/nav_menu.php';
    ?>
	
	<div id="login_form">

        <?php
            if (isset($_SESSION['u_id'])){
                echo '<div style="background-color:white;">V-ati autentificat cu succes.<br>Bine ai venit, '. $_SESSION['u_uid'] . '.<br>'
                        .$_SESSION['u_first'] . '.<br>'
                        .$_SESSION['u_last'] . '.<br>'
                        .$_SESSION['u_email'] . '.<br>'
                        .$_SESSION['u_id'] .'</div>';
                
                echo '<form action="includes/logout.php" method="POST">
                            <input type="submit" name="submit" value="Delogare" style="font-size:18px;">
                        </form>';
            } else {
                echo '<form name="f1" method="post" action="includes/login.php" id="f1">
                 <table>
                    <tr>
                        <td class="f1_label">Utilizatoriii:</td><td><input class="input_log" type="text" name="uid" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td class="f1_label">Parola:</td><td><input class="input_log" type="password" name="pwd" value=""  />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="buton_login" type="submit" name="submit" value="Logare" style="font-size:18px;" />
                        </td>
                        <td>
                            <a id="buton_creare" href="creare_cont.php">Creare cont</a>
                        </td>
                    </tr>
                </table>
            </form>';
            }
            if (isset($_GET['login'])){
         if($_GET['login']=='empty')
           echo"<h3 class='eroare'>Campuri necompletate</h3>";
            else if($_GET['login']=='ue')
            echo"<h3 class='eroare'>Nume/email gresit</h3>";
             else if($_GET['login']=='pass')
              echo"<h3 class='eroare'>Parola incorecta</h3>";       
}
        ?> 

</div>





</body>


</html>