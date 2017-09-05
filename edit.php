<html>
	<body>
	<form method = "post">
		<label>Name: </label>
		<input type = "text" id = 'edit' name = 'edit'/>
<br/><br/><br/>
		<label>FirstName: </label>
		<input type = "text" id = "editname" name = "editname"/><br/>
		<label>MiddleName: </label>
		<input type = "text" id = "editname" name = "editmname"/><br/>
		<label>LastName: </label>
		<input type = "text" id = "editname" name = "editlname"/><br/>
		<label>Age: </label>
		<input type = "text" id = "editname" name = "age"/><br/>
		<input type = "submit" id = "okedit" name = "okedit" value = "EDIT"/>
	</form>



	</body>

</html>

<?php
include("connect.php");
if(isset($_POST['okedit'])){
	$edit = $_POST['edit'];
	$fname = $_POST['editname'];
	$mname = $_POST['editmname'];
	$lname = $_POST['editlname'];
	$age = $_POST['age'];

	


	$sql = "UPDATE `kit` SET `fName`='$fname',`mName`='$mname',`lName`='$lname',`Age`='$age' WHERE `fname` = '$edit' ";

	mysqli_query($con, $sql);
	echo "Successfully Edit";
}

?>