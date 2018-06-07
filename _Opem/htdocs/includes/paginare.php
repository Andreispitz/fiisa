<?php

include 'db_connection.php';

$sql = "SELECT * FROM petitii";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

for ($x = 1; $x <(($resultCheck)/5)+1 ; $x++) {
    echo "<a href='toatep.php?page=".$x."'>".$x." "."</a>";
} 

