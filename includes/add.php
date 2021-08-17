<?php 
include_once('../config/db.php');
include('flash.php');
if(isset($_POST['add'])){
	$title = $_POST['title'];
	$date = date('Y-m-d H:i:s');
	$sql="INSERT INTO `text_list` (`id`, `title`, `inserted`) VALUES (NULL, '$title', '$date')";
	$result = $mysqli->query($sql);
	if($result){
		$flash->add("notification_msg","Successfulle Added!");
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