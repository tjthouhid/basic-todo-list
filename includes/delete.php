<?php 
include_once('../config/db.php');
include('flash.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql="DELETE FROM `text_list` WHERE `id` = '$id'";
	$result = $mysqli->query($sql);
	if($result){
		$flash->add("notification_msg","Successfulle Deleted!");
		$flash->add("notification_type","success");
		header("Location:../index.php");
	}else{
		$flash->add("notification_msg","Somethng went wrong!");
		$flash->add("notification_type","error");
		header("Location:../index.php");
	}
}else{
	$flash->add("notification_msg","You are No Authorized To See The Page!");
	$flash->add("notification_type","error");
	header("Location:../index.php");
	
}

?>