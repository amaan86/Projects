<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "attendance";
$conn = mysqli_connect($host,$user,$pass,$db);
	$enrollErr = $passErr = " ";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$enrollid =($_POST['enroll']);
		$password = ($_POST['pass']);
		if(empty($_POST['enroll']))
		{
			$enrollErr = "Please enter your Enrollment Id";
		}
		elseif(!preg_match("/^[0-9]{8}+$/",($_POST['enroll'])))
		{
			$enrollErr = "Invalid EnrollmentId";
		}
		else
		{
			echo ""; 
		}
		if(empty($_POST['pass']))
		{
			$passErr = "Please enter your Password";
		}
		else
		{
			echo "";
		}
		$sql = "SELECT * FROM regdata WHERE EnrollmentId = '$enrollid' AND Password = '$password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) == 1){
			$_SESSION['message'] = 'You are logged in';
			$_SESSION['enroll'] = $enrollid;
			$_SESSION['name'] = $row['FirstName'];
			header("Location: welcome.php");
			die();
		}
		else{
			$passErr = 'Incorrect Username/Password';
		}
	}
	mysqli_close($conn);
?>