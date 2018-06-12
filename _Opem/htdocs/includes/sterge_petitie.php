<?php
if (isset($_GET['id']) && isset($_GET['uid'])){
	$pid=$_GET['id'];
    $uid=$_GET['uid'];

include 'db_connection.php';
$result = mysqli_query($conn,"SELECT id_creator from petitii where ID='$pid'");
$row = mysqli_fetch_array($result);
if($row['id_creator']==$uid){
$sql = "delete from semnaturi where id_petitie='$pid';";
					mysqli_query($conn, $sql);
$sql = "delete from raportari where id_petitie='$pid';";
					mysqli_query($conn, $sql);
$sql = "delete from petitii where ID='$pid';";
					mysqli_query($conn, $sql);
					header("Location: ../contul_meu.php?sters=1");
					exit();
                    mysql_close($conn);
                }else{
                $result2 = mysqli_query($conn,"SELECT user_admin from users where user_id='$uid'");
                $row2=mysqli_fetch_array($result2);
                if($row2['user_admin']==1){
     
                	$sql = "delete from semnaturi where id_petitie='$pid';";
					mysqli_query($conn, $sql);
                    $sql = "delete from raportari where id_petitie='$pid';";
					mysqli_query($conn, $sql);
                    $sql = "delete from petitii where ID='$pid';";
					mysqli_query($conn, $sql);
					header("Location: ../administrator.php?sters=1");
					exit();
                    mysql_close($conn);
                }
}
}else
echo"<p>asnakjs</p>";



?>