<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>

	<?php 
		if (isset($_GET['id'])) {
			 $id = $_GET['id'];		 
	$query =  "SELECT * FROM members WHERE id =$id";
	$data = $db->query($query);
		foreach($data as $row){
				$id = $row['id'];
				$name = $row['name'];
				$possition = $row['possition'];
				$salary = $row['salary'];
				$address = $row['address'];
				$phone_number = $row['phone_number'];
	 ?>		
<center>
	<form action="" method="post">
		<table> 
			<tr>
				<td>id</td>
				<td><input type="text" name="id" value="<?php echo  $id?>"></td>
			</tr>
			<tr>
				<td>name</td>
				<td><input type="text" name='name' style="margin-top: 6px" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>possition</td>
				<td><input type="text" name="possition" value="<?php echo  $possition?>"></td>
			</tr>
			<tr>
				<td>salary</td>
				<td><input type="text" name='salary' style="margin-top: 6px" value="<?php echo $salary; ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name='address' style="margin-top: 6px" value="<?php echo $address; ?>"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="text" name='phone_number' style="margin-top: 6px" value="<?php echo $phone_number; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="Data Insert" style="margin-top: 6px"></td>
			</tr>
		</table>
		<hr>
<?php }} ?>
	</form>
</center>

<?php 
	if (isset($_POST['save'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$possition = $_POST['possition'];
			$salary = $_POST['salary'];
			$address = $_POST['address'];
			$phone_number = $_POST['phone_number'];
			
		$sql = "UPDATE members SET id='$id', name='$name', possition='$possition', salary= '$salary', address = '$address', phone_number= '$phone_number' WHERE id = $id";
			if ($db->query($sql)==true){
				echo "Data Update Success";
				header('location:index.php');
			}
			else{
			echo "Data Update Fail";
			}
		}	
