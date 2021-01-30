<?php
$host="localhost";
$user="root";
$password="";
$db="attendance";
$conn=mysqli_connect($host,$user,$password,$db);
if($conn){
	$sql="INSERT INTO Mar
	VALUES
	('19102001',NULL,1,0,1,1,1,1,NULL,1,1,0,1,1,0,NULL,1,1,1,0,1,1,NULL,1,0,1,1,1,0,NULL,1,1),
	('19102002',NULL,0,0,1,1,0,1,NULL,1,1,0,1,1,0,NULL,0,1,1,1,0,1,NULL,0,1,0,1,1,0,NULL,1,0),
	('19102003',NULL,0,1,1,1,0,0,NULL,0,1,0,1,1,0,NULL,1,0,1,1,1,0,NULL,0,1,1,1,1,0,NULL,1,1),
	('19102004',NULL,1,1,0,1,1,0,NULL,0,1,1,1,1,1,NULL,1,0,1,1,0,1,NULL,0,1,1,0,1,0,NULL,1,1),
	('19102005',NULL,1,0,1,1,1,0,NULL,0,1,1,1,0,1,NULL,0,1,0,1,1,1,NULL,0,1,0,1,0,1,NULL,1,0),
	('19102006',NULL,1,0,1,0,1,0,NULL,1,1,0,1,1,0,NULL,0,1,1,1,1,1,NULL,0,1,1,0,1,0,NULL,0,1),
	('19102007',NULL,1,1,0,1,1,1,NULL,0,1,1,1,1,1,NULL,1,0,1,1,0,1,NULL,1,1,0,1,1,0,NULL,1,1),
	('19102008',NULL,1,0,1,1,0,1,NULL,1,1,1,1,0,0,NULL,1,1,1,0,1,1,NULL,1,1,1,1,1,0,NULL,1,1),
	('19102009',NULL,0,1,1,1,1,0,NULL,0,1,1,1,1,0,NULL,1,0,1,1,1,0,NULL,0,1,1,1,1,0,NULL,1,0),
	('19102010',NULL,1,1,1,1,1,0,NULL,1,0,1,0,1,0,NULL,0,1,1,1,0,1,NULL,0,1,1,1,1,0,NULL,1,0),
	('19102011',NULL,1,0,1,1,1,0,NULL,0,1,1,1,0,1,NULL,0,1,0,1,1,1,NULL,0,1,1,1,0,1,NULL,1,1),
	('19102012',NULL,1,0,1,1,0,1,NULL,1,0,1,1,1,0,NULL,0,1,0,1,1,0,NULL,0,1,1,1,1,1,NULL,1,1),
	('19102013',NULL,1,0,1,1,0,1,NULL,1,0,1,1,1,1,NULL,0,1,1,1,0,0,NULL,0,1,1,1,1,0,NULL,0,1),
	('19102014',NULL,1,1,0,1,1,0,NULL,0,1,1,0,1,1,NULL,1,0,1,1,0,1,NULL,1,1,1,1,1,0,NULL,1,1),
	('19102015',NULL,0,1,1,1,1,0,NULL,0,1,1,1,1,0,NULL,1,1,1,1,1,0,NULL,0,1,1,1,1,0,NULL,1,1);";
	if(mysqli_query($conn,$sql)){
		echo "Table Created";
	}
	else{
		echo "ERROR";
	}
}
else{
	echo "Connection failed";
}
mysqli_close($conn);
?>