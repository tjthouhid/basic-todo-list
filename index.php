<?php 
include_once('config/db.php');
include('includes/flash.php');
$sql="SELECT * FROM `text_list`";
$query = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="list-container">

		<h2>Test List</h2>
		<div class="list-form">
			<form action="includes/add.php" method="post">
				<input type="text" name="title" placeholder="type here..">
				<button type="submit" name="add">Add</button>
			</form>
			<?php if($query->num_rows>0):?>
			<a href="javascript:void(0);" class="clear-all">Clear All</a>
			<?php endif;?>
		</div>
		<div id="list4">
		   <ul>
		   	<?php while ($row = $query->fetch_object()) : ?>
		      <li><a href="javascript:void(0);"><strong><?php echo $row->title;?></strong></a><a href="javascript:void(0);" class="delete-list" data-list-id="<?php echo $row->id;?>">x</a></li>
		  	<?php endwhile;?>
		      
		   </ul>
		</div>

	</div>
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<?php 
	$notification_msg=$flash->render('notification_msg');
	$notification_type=$flash->render('notification_type');
	if($notification_msg):
	?>
	<div class="notifcation <?php echo $notification_type;?>">
		<a href="javascript:void(0);" class="close-notification">x</a>
		<?php echo $notification_msg;?>
	</div>
	<script type="text/javascript">
		$(".notifcation").slideDown(200).fadeOut(3000);
	</script>
	<?php endif;?>
</body>
</html>