<html>
	<body>
	<form method = "post">
		<label>FirstName</label>
		<input type = 'text' name = 'txtname' id = 'txtname'/><br/><br/>
		<label>MiddleName</label>
		<input type = "text" name = 'txtmname' id = 'txtmname'/><br/><br/>
		<label>LastName</label>
		<input type = "text" name = 'txtlname' id = 'txtlname'/><br/><br/>
		<label>Age</label>
		<input type = "text" name = 'txtage' id = 'txtage'/><br/><br/>
		<input type = "submit" name = "btnsubmit" id = "btnsubmit" value = "Add"/>
	</form>
		<form action = 'index1.php'>
		<input type = "submit" value = "Back">
		</form>
	</body>

</html>

<?php
include("connect.php");
	if(isset($_POST['btnsubmit'])){
		$name = $_POST['txtname'];
		$lname = $_POST['txtlname'];
		$mname = $_POST['txtmname'];
		$age = $_POST['txtage'];

		$sql = "INSERT INTO `kit`(`fName`, `mName`, `lName`, `Age`) VALUES ('$name','$mname','$lname','$age')";
		mysqli_query($con,$sql);

		echo "Successfully Added";
	}
?>