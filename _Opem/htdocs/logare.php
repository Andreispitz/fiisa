
    <?php 
        include_once 'includes/nav_menu.php';
    ?>
	
	<div id="login_form">

        
                <form name="f1" method="post" action="includes/login.php" id="f1">
                 <table class="login_table" >
                    <tr>
                        <td class="f1_label">Utilizatoriii:</td><td><input class="input_log" type="text" name="uid" value="" />
                        </td>
                    </tr>
                    <tr id="make-yellow">
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
            </form>
            
        
</div>





</body>


</html>