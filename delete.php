<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>

<a href="edit.php">Back</a>
	<?php 
		if (isset($_GET['id'])) {
			echo  $id = $_GET['id'];
			} ?>

 <?php 
	 $step=$db->prepare("DELETE FROM members WHERE id=:id");
	$step->bindParam(":id",$id,PDO::PARAM_INT);
	$step->execute();

  ?>