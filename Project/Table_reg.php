<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "attendance";
	$conn = mysqli_connect($host,$user,$password,$db);
	if($conn){
		$sql="CREATE TABLE regdata(
		FirstName VARCHAR(20) NOT NULL,
		MiddleName VARCHAR(20) NOT NULL,
		LastName VARCHAR(20) NOT NULL,
		MobileNo VARCHAR(10) NOT NULL,
		EnrollmentId VARCHAR(09) PRIMARY KEY,
		Password VARCHAR(30) NOT NULL);";
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