<?php
	$con = mysqli_connect('localhost', 'root', '', 'ecocity');

	//check that connection happened
	if (mysqli_connect_errno()){
		echo "1: Connection failed."; //error code #1 = connection failed
		exit();
	}
	
	$username = mysqli_real_escape_string($con, $_POST["name"]);
	$id = mysqli_real_escape_string($con, $_POST["id"]);
	//$ecoscore = mysqli_real_escape_string($con, $_POST["ecoscore"]);
	//$savedata = mysqli_real_escape_string($con, $_POST["savedata"]);
	$ecoscore = 1000;
	$savedata = "ienientfpt";
	
	$ecoscore
	
	$insertuserquery = "INSERT INTO savegames (id, ecoscore, savedata) VALUES ('" . $id . "', '" . $ecoscore . "', '" . $savedata . "');";

	mysqli_query($con, $insertuserquery) or die("4: Insert player query failed"); //error code #4 = insert query failed
		
	echo("0");
?>