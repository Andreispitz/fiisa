<?php 
include_once 'includes/db_connection.php';

           $query_c = "SELECT * FROM petitii";
           $result_c = mysqli_query($conn,$query_c);
        while($row = mysqli_fetch_array($result_c)){
          echo '<option value = "' . $row['ID'] .'">' . $row['titlu_petitie'] . '</option>';
        } 
     
         ?> 