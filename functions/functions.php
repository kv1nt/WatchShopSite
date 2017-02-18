<?php
	$mysqli = false;                   
	function connectDB(){
	global mysqli;	
	$mysqli = new mysqli("localhost", "root", "", "ishopbase");
	$mysqli->query("SET NAMES 'UTF-8'")
	}
	
	function connectDB(){
		global mysqli;
		$mysqli->close();
	}
?>