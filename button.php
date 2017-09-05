<?php

if(isset($_POST['btnadd'])){
	$first = $_POST['txtname'];
	$middle = $_POST['txtmiddle'];
	$last = $_POST['txtlast'];
	$age = $_POST['txtage'];

	$connectionDatabase->insertAdd($first,$middle,$last,$age);
}
if(isset($_POST['btnedit'])){
	$editFirst = $_POST['editname'];
	$editMiddle = $_POST['editmiddle'];
	$editLast = $_POST['editlast'];
	$editAge = $_POST['editage'];
	$edit = $_POST['txtedit'];

	$connectionDatabase->editDatabase($editFirst,$editMiddle,$editLast,$editAge,$edit);
}
if(isset($_POST['btnDelete'])){
	$deleteName = $_POST['txtDelete'];
	$connectionDatabase->deleteDatabase($deleteName);
}

?>