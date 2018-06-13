<!--Pentru fiecare camp se aplica functia de validare cu cei 2 parametri
numele inputului si id-ul span-ului -->
<script src="includes/schimbareParola.js"></script>
    <?php 
        include_once 'includes/nav_menu.php';
    ?>
	
	<div class="contul-meu">
        <p id="welcome">Bine ai venit, <?php echo $_SESSION['u_uid'];?> </p>
        <form action="includes/logout.php" method="POST">
                <input type="submit" name="submit" value="Delogare" style="font-size:18px;">
        </form>

        <!-- Daca adminul este logat atunci ...-->
        <?php 

            if ($_SESSION['u_admin'] == 1){
                echo '<a class="pagina-administrator" href="../administrator.php">Pagina administratorului</a>';
            }

        ?>

        <h2>Setarile contului</h2>

            <button class="modificari" onclick="schimbare_parola()">Schimbare parola</button>
            <div id="schimbare_parola" style="display: none">
                <form action="includes/schimbare_parola.php" method="POST" name="parola_noua">
                    <ul>
                        <li>Parola curenta:</li>
                        <input class="input-acc" type="password" name="currentPass" onblur="validare_camp('parola_noua', 'currentPass', 'field1')">
                        <span id="field1"></span>

                        <li>Parola noua:</li>
                        <input class="input-acc" type="password" name="newPass" onblur="validare_camp('parola_noua', 'newPass', 'field2')">
                        <span id="field2"></span>

                        <li>Confirmare parola noua:</li>
                        <input class="input-acc" type="password" name="confirmNewPass" onblur="validare_camp('parola_noua', 'confirmNewPass', 'field3')">
                        <span id="field3"></span>

                        <br>
                        <button class="buton-submit" type="submit" name="submit">Modifica</button>
                    </ul>
                </form>
            </div>


            <br>
            <br>
            <button class="modificari" onclick="setarile_profilului()">Setarile profilului</button>
            <div id="setari_profil" style="display: none">
                <form action="includes/modificare_profil.php" method="POST" name="modificari_profil">
                    <ul>
                        <li>Email:</li>
                        <input class="input-acc" type="text" name="email" value = <?php echo $_SESSION['u_email'] ?> onblur="validare_camp('modificari_profil','email','field4')">
                        <span id="field4"></span>

                        <li>Nume:</li>
                        <input class="input-acc" type="text" name="nume" value = <?php echo $_SESSION['u_first'] ?> onblur="validare_camp('modificari_profil','nume','field5')">
                        <span id="field5"></span>

                        <li>Prenume:</li>
                        <input class="input-acc" type="text" name="prenume" value = <?php echo $_SESSION['u_last'] ?> onblur="validare_camp('modificari_profil','prenume','field6')">
                        <span id="field6"></span>

                        <br>
                        <button class="buton-submit" type="submit" name="submit">Salveaza modificarile</button>

                    </ul>
                </form>


            </div>


        <div>
            <h2>Petitiile mele</h2>
            <?php 
             if(isset($_GET['sters'])){
    echo"<h3>Petitia a fost stearsa!</h3?";
   }
?>


            <?php
            //Aducerea de baza de date a petitiilor utilizatorului
                include 'includes/db_connection.php';
                $myId = $_SESSION['u_id'];
                $result = mysqli_query($conn,"SELECT * FROM petitii WHERE id_creator='$myId'");
                while ($row = mysqli_fetch_array($result)){

                 if(strlen($row['text_petitie'])>199)
                 $text=substr($row['text_petitie'], 0, 199);
                 else
                $text=$row['text_petitie'];
                    
                    echo"<article class='petitie'>";
                        echo"<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>";
                        echo"<p class='autor'>Scris de " . $_SESSION['u_uid']. "</p>";
                        echo"<p class='destinatar'>".$row['destinatar']."</p>";
                        
                        echo"<p class='text_petitie'>". $text ."</p>";
                       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
                            <form class='forma_buton' method='get' >
                            <a class='catre_semneaza' href='semneaza1.php?id=".$row['ID']."'> Citeste mai mult </a>
                            <hr>
                            <a class='catre_semneaza' href='includes/sterge_petitie.php?id=".$row['ID']."&uid=".$_SESSION['u_id']."'> Sterge </a> </form>
                    </article>";
                }
            ?>

        </div>


        
    </div>





</body>


</html>