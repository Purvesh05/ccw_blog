<?php
session_start();
require('db_conn.php');

$u_id=$_SESSION["rn"];
$b_id=$_POST["b_id"];
$action=$_POST["action"];

if($action=="1"){
	$query1="insert into blog_likes values($b_id,$u_id);";
}
else{
	$query1="delete from blog_likes where blog_id=$b_id and user_id=$u_id";
}
mysqli_query($conn,$query1);

$query2="select count(*) from blog_likes where blog_id=$b_id;";
$likes=mysqli_fetch_array(mysqli_query($conn,$query2));
$return_arr=array("likes"=>$likes[0]);
echo json_encode($return_arr);

?>
