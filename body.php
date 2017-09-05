<html>
<head>
	<script src = 'script/jquery-3.2.1.min.js'></script>
	<script src = 'script/script.js'></script>
	<link rel = 'stylesheet' type= 'text/css' href = 'style.css'/>
	
	<title></title>
</head>
<body>
	<header>CRUD</header>
	<br/><br/>
	<center>
		<input type = 'button' class = 'group' value = 'Show Add' id = 'btnShowAdd'/>
		<input type = 'button' class = 'group' value = 'Show Edit' id = 'btnShowEdit'/>
		<input type = 'button' class = 'group' value = 'Show Delete' id = 'btnShowDelete'/>
		<input type = 'button' class = 'group' value = 'Show Data' id = 'btnShowData'/>
	</center>
	<br/><br/>
	<form method = 'post'>
	<div id = 'addStyle'>
		
		<div id = 'color'>
		<h2>ADD</h2>
		<label>Name: </label>
		<input type = 'text' id = 'txtname' name = 'txtname'/><br/><br/>
		<label>MiddleName: </label>
		<input type = 'text' id = 'txtmiddle' name = 'txtmiddle'/><br/><br/>
		<label>LastName: </label>
		<input type = 'text' id = 'txtlast' name = 'txtlast'/><br/><br/>
		<label>Age; </label>
		<input type = 'text' id = 'txtage' name = 'txtage'/> <br/><br/>
		<input value = 'ADD'type = 'submit' id = 'btnadd' name = 'btnadd'/>
		</div>
	</div>
	<div id = 'editStyle'>
		<div id = 'colorEdit'>
		<h2>EDIT</h2>
		<label>Enter Name to Edit: </label>
		<input type ='text' id = 'txtedit' name = 'txtedit'/>
		<br/><br/>
		<label>Name: </label>
		<input type = 'text' id = 'editname' name = 'editname'/><br/><br/>
		<label>MiddleName: </label>
		<input type = 'text' id = 'editmiddle' name = 'editmiddle'/><br/><br/>
		<label>LastName: </label>
		<input type = 'text' id = 'editlast' name = 'editlast'/><br/><br/>
		<label>Age; </label>
		<input type = 'text' id = 'editage' name = 'editage'/> <br/><br/>
		</div>
		<input value = 'EDIT'type = 'submit' id = 'btnedit' name = 'btnedit'/>
		<br/><br/>
	</div>
	<div id = 'deleteStyle'>
		<h2>DELETE</h2>
		<label>Enter Name to Delete: </label>
		<input type = 'text' id = 'txtDelete' name = 'txtDelete'/>
		<input value = 'DELETE'type = 'submit' id = 'btnDelete' name = 'btnDelete'/>
	</div>


	</form>
</body>
</html>
