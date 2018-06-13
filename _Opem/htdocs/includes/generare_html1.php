<?php
  $pid=mysqli_real_escape_string($conn, $_POST['raport']);
include 'db_connection.php';
$count="SELECT user_uid,titlu_petitie,destinatar,nr_semnaturi,raportari,data_C,data_e,text_petitie from petitii JOIN users ON id_creator=user_id where ID='$pid'";
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
p {
   font-size: 130%;
   text-align: center;
}
h3{
  text-align: center;
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
    echo"</tr>
    </table>
    <h3>Text petitie</h3>";
    echo"<p>". $row['text_petitie']."</p>";
  }
  echo"<h3>Comentarii</h3>";

  echo"<table>
  <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>email</th>
    <th>Mesaj</th>
  </tr>";



  $count="SELECT Nume,prenume,email,mesaje from semnaturi where id_petitie='$pid'";


foreach ($conn->query($count) as $row) {
echo"<tr>";
    echo"<td>".$row['Nume']."</td>";
    echo"<td>".$row['prenume']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['mesaje']."</td>";
    echo"</tr>";
  }
  echo"</table>
</body>
</html>";  
mysqli_close($conn);



?>