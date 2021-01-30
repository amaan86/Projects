<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "attendance";
	$conn = mysqli_connect($host,$user,$password,$db);
	if($conn){
		$sql="INSERT INTO regdata
		VALUES
		(";
		if(mysqli_query($conn,$sql)){
			echo "Table";
		}
		else{
			echo "error";
		}
	}
	else{
		echo "failed";
	}
	mysqli_close($conn);
?>