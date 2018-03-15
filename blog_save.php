<?php
session_start();
require('db_conn.php');

$u_id=$_SESSION["rn"];
$b_id=$_POST["b_id"];
$action=$_POST["action"];

if($action=="1"){
	$query1="insert into blog_saves values($b_id,$u_id);";
}
else{
	$query1="delete from blog_saves where blog_id=$b_id and user_id=$u_id";
}
mysqli_query($conn,$query1);

echo json_encode("hallo from the server siiiiide");

?>
