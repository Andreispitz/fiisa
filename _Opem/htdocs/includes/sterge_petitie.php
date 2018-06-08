<?php
if (isset($_GET['id'])){
if (isset($_GET['uid'])){
include 'db_connection.php';
$pid=$_GET['id'];
$uid=$_GET['uid'];


$sql = "delete from semnaturi where id_petitie='$pid';";
					mysqli_query($conn, $sql);
$sql = "delete from raportari where id_petitie='$pid';";
					mysqli_query($conn, $sql);
$sql = "delete from petitii where ID='$pid';";
					mysqli_query($conn, $sql);
					header("Location: ../contul_meu.php");
					exit();
}
}
mysql_close($conn);

?>