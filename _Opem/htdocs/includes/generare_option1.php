<?php 
include_once 'includes/db_connection.php';

           $query = "SELECT * FROM petitii";
           $result = mysqli_query($conn,$query);
        while($row1 = mysqli_fetch_array($result)){
          echo '<option value = "' . $row1['ID'] .'">' . $row1['titlu_petitie'] . '</option>';
        } 
 
         ?> 