<?php

if(isset($_GET['ID'])) {
	
	$ID = $_GET['ID'];
	require("connect.php");
	
	$query = "DELETE FROM prodavci WHERE ID = {$ID}";
	
	mysqli_query($conn,$query);
	
	header("Location: ../remove.php");
	
	
}