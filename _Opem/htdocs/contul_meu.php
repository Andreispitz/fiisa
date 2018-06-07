<!--Pentru fiecare camp se aplica functia de validare cu cei 2 parametri
numele inputlui si id-ul span-ului -->
<script src="includes/schimbareParola.js"></script>
    <?php 
        include_once 'includes/nav_menu.php';
    ?>
	
	<div class="contul-meu">
        <p style="float:right">Bine ai venit, <?php echo $_SESSION['u_uid'];?> </p>

        <h2>Setarile contului</h2>

            <button onclick="schimbare_parola()">Schimbare parola</button>
            <div id="schimbare_parola" style="display: none">
                <form action="includes/schimbare_parola.php" method="POST" name="parola_noua">
                    <ul>
                        <li>Parola curenta:</li>
                        <input type="password" name="currentPass" onblur="validare_camp('currentPass', 'field1')">
                        <span id="field1"></span>

                        <li>Parola noua:</li>
                        <input type="password" name="newPass" onblur="validare_camp('newPass', 'field2')">
                        <span id="field2"></span>

                        <li>Confirmare parola noua:</li>
                        <input type="password" name="confirmNewPass" onblur="validare_camp('confirmNewPass', 'field3')">
                        <span id="field3"></span>

                        <br>
                        <button type="submit" name="submit">Modifica</button>
                    </ul>
                </form>
            </div>

            <button>Date</button>


        <div>
            <h2>Petitiile mele</h2>

            <?php
            //Aducerea de baza de date a petitiilor utilizatorului
                include 'includes/db_connection.php';
                $myId = $_SESSION['u_id'];
                $result = mysqli_query($conn,"SELECT * FROM petitii WHERE id_creator='$myId'");
                while ($row = mysqli_fetch_array($result)){

                    echo"<article class='petitie'>";
                        echo"<h3 class ='titlu_petitie'>".$row['titlu_petitie']."</h3>";
                        echo"<p class='autor'>Scris de " . $_SESSION['u_uid']. "</p>";
                        echo"<p class='destinatar'>".$row['destinatar']."</p>";
                        
                        echo"<p class='text_petitie'>". $row['text_petitie'] ."</p>";
                       echo" <p class='nr_semnaturi'> SEMNATURI:".$row['nr_semnaturi']."</p>
                            <form class='forma_buton' method='get' >
                            <a class='catre_semneaza' href='semneaza1.php?id=".$row['ID']."'> Citeste mai mult </a> </form>
                    </article>";
                }
            ?>

        </div>


        <form action="includes/logout.php" method="POST">
                <input type="submit" name="submit" value="Delogare" style="font-size:18px;">
        </form>
    </div>





</body>


</html>