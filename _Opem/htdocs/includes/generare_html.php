<?php

$count="SELECT user_uid,titlu_petitie,destinatar,nr_semnaturi,raportari,data_C,data_e from petitii JOIN users ON id_creator=user_id ";
echo"
<html>
<head>

<title>'Statistici html'</title>
<style>
table {
    font-family: arial, sans-serif;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body>
<table>
  <tr>
    <th>Creator</th>
    <th>Titlu</th>
    <th>Destinatar</th>
    <th>S</th>
    <th>R</th>
    <th>DataC</th>
    <th>DataE</th>
  </tr>";
foreach ($conn->query($count) as $row) {
   echo"<tr>";
    echo"<td>".$row['user_uid']."</td>";
    echo"<td>".$row['titlu_petitie']."</td>";
    echo"<td>".$row['destinatar']."</td>";
    echo"<td>".$row['nr_semnaturi']."</td>";
    echo"<td>".$row['raportari']."</td>";
    echo"<td>".$row['data_C']."</td>";
    echo"<td>".$row['data_e']."</td>";
    echo"</tr>";
  }
  mysqli_close($conn);
  echo"</table>

</body>
</html>";  




?>
