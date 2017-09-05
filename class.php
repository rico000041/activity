<?php

$connectionDatabase = new ConectionDatabase($config);

class ConectionDatabase{ 

	var $con;

	public function __construct($config){
		$this->con = mysqli_connect($config['connection'],$config['username'],$config['password'],$config['name']); 

	}
	public function readData(){
		$sql = "SELECT * FROM kit";
		$result = mysqli_query($this->con,$sql);

		echo "<div id = 'read'><center>";
		echo "<h2>READ</h2>";
		echo "<table border = 1>";
		echo "<tr><th>Name</th><th>MiddleName</th><th>LastName</th><th>Age</th></tr>";
		
		while($row = mysqli_fetch_array($result)) 
		{
		
			$temp1 = $row['fName'];
			$temp2 = $row['mName'];
			$temp3 = $row['lName'];
			$temp4 = $row['Age'];

			echo "<tr><td>$temp1</td>";
			echo "<td>$temp2</td> ";
			echo "<td>$temp3</td> ";
			echo "<td>$temp4</td></tr>";
			echo "</br>";
		}
		echo "</table>";
		echo "</center></div>";

	}
	public function insertAdd($firstname,$middlename,$lastname,$agenow){
		mysqli_query($this->con,"INSERT INTO `kit`(`fName`, `mName`, `lName`, `Age`) VALUES ('$firstname','$middlename','$lastname','$agenow')");
		
	}
	public function editDatabase($first,$middle,$last,$thisage,$editname){
		mysqli_query($this->con,"UPDATE `kit` SET `fName`='$first',`mName`='$middle',`lName`='$last',`Age`='$thisage' WHERE `fname` = '$editname'");
		
	}
	public function deleteDatabase($delete){
		mysqli_query($this->con,"DELETE FROM `kit` WHERE `fname` = '$delete'");
		
	}
	

}
require 'button.php';



?>