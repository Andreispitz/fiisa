<?php

echo"<table id='table1'>
  <tr class='topt'>
    <th>Titlu</th>
    <th>Semnaturi</th>
  </tr>";


include 'db_connection.php';
$result = mysqli_query($conn,"SELECT * FROM petitii  order by nr_semnaturi desc limit 0,10");
while($row = mysqli_fetch_array($result))
{



echo"  <tr>
    <td><a href='semneaza1.php?id=".$row['titlu_petitie']."'>".$row['titlu_petitie']."</a></td>
    <td>".$row['nr_semnaturi']."</td>
  </tr>";
  


  }
    echo"</table>";
    mysqli_close($conn);
?>
