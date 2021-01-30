<?php
	error_reporting(E_ALL && ~E_NOTICE);
	$fnameErr = $mnameErr = $lnameErr = $mobileErr = $enrollErr = $genderErr = $passErr = $confErr = $sameErr = " ";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{	
		if(empty($_POST['fname']))
		{
			$fnameErr = "Please enter your First Name";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",($_POST['fname']))) 
		{
			$fnameErr = "Only letters and white space allowed";
		}
		else
		{
			$fname = ($_POST['fname']);
		}
		if(empty($_POST['mname']))
		{
			$mnameErr = "Please enter your Middle Name";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",($_POST['mname']))) 
		{
			$mnameErr = "Only letters and white space allowed";
		}
		else
		{
			$mname = ($_POST['mname']);
		}
		if(empty($_POST['lname']))
		{
			$lnameErr = "Please enter your Last Name";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",($_POST['lname']))) 
		{
			$lnameErr = "Only letters and white space allowed";
		}
		else
		{
			$lname = ($_POST['lname']);
		}
		if(empty($_POST['mobile']))
		{
			$mobileErr = "Please enter your Mobile Number";
		}
		elseif (!preg_match("/^[0-9]{10}+$/",($_POST['mobile']))) 
		{
			$mobileErr = "Invalid Mobile Number";
		}
		else
		{
			$mobile = ($_POST['mobile']);
		}
		if(empty($_POST['enroll']))
		{
			$enrollErr = "Please enter your EnrollmentId";
		}
		elseif (!preg_match("/^[0-9]{8}+$/",($_POST['enroll']))) 
		{
			$enrollErr = "Invalid EnrollmentId";
		}
		else
		{
			$enrollid = ($_POST['enroll']);
		}
		if(empty($_POST['pass']))
		{
			$passErr = "Please enter your Password";
		}
		elseif(($_POST['pass']) != ($_POST['conf']))
		{
			$passErr = "Password and Confirm Password should be same";
		}
		elseif(strlen($_POST['pass']) < 8)
		{
			$passErr = "Password should be 8 characters long";
		}
		else
		{
			$pass = ($_POST['pass']);
		}
		if(empty($_POST['conf']))
		{
			$confErr = "Please confirm your password";
		}
		else
		{
			$conf = ($_POST['conf']);
		}
		
	}
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "Attendance";
	$conn = mysqli_connect($host,$user,$password,$db);
	if(isset($_POST['Submit'])){
		if($conn){
			$sql = "INSERT INTO regdata
					VALUES
					('$fname','$mname','$lname','$mobile','$enrollid','$pass');";
			if(mysqli_query($conn,$sql)){
				echo " ";
			}
			else{
				echo "";
			}
		}
		else{
			echo "";
		}
	}
	mysqli_close($conn);
?>