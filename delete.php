<html>
	<body>
	<form method = "post">
		<label>Input First Name: </label>
		<input type = "text" id = "delete" name = 'delete'/>
		<input type = "submit" id = 'btndelete' name = "btndelete"/>

	</form>
	<form action = 'index1.php'>
		<input type = "submit" value = "Back">
		</form>
	</body>
</html>
<?php
include("connect.php");
	if(isset($_POST['btndelete']))
	{
		$delete = $_POST['delete'];
		$sql = "DELETE FROM `kit` WHERE `fname` = '$delete'";
		mysqli_query($con,$sql);
		echo "Successfully Deleted";
	}

?>