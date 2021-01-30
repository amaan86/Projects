<html>
	<head>
		<title>E-Examination</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		<link href="style2.css" rel="stylesheet">
	</head>
	<body>
<?php
	include("regis.php");
?>
	<div class="main">
		<h2>Student Registration</h2>
		<hr>
		<p class="text">All the fields are necessary</p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<div class="labels">
				<label class="label">Firstname:</label><br><br>
				<label class="label">Middlename:</label><br><br>
				<label class="label">Lastname:</label><br><br>
				<label class="label">MobileNo:</label><br><br>
				<label class="label">EnrollmentId:</label><br><br>
				<label class="label">Password:</label><br><br>
				<label class="label">Confirm Password:</label>
			</div>
			<div class="inputs">
			<div class="input01">
				<input class="input001" type="text" name="fname">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo $fnameErr;?></span></span>
			</div><br>
			
			<div class="input01">	
				<input class="input001" type="text" name="mname">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo $mnameErr;?></span></span>
			</div><br>
			
			<div class="input01">	
				<input class="input001" type="text" name="lname">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo $lnameErr;?></span></span>
			</div><br>
			
			<div class="input01">
				<input class="input001" type="text" name="mobile">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo $mobileErr;?></span></span>
			</div><br>
			
			<div class="input01">	
				<input class="input001" type="text" name="enroll">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo $enrollErr;?></span></span>
			</div><br>
			
			<div class="input01">
				<input class="input001" type="password" name="pass">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo "$passErr $sameErr";?></span></span>
			</div><br>
			
			<div class="input01">
				<input class="input001" type="password" name="conf">
				<span class="focus"></span>
				<span class="error">*<span class="validation"><?php echo $confErr;?></span></span>
			</div><br>
			</div>
			<button type="Submit" name="Submit" id="sub">Submit</button>
			<button type="Reset" name="Reset" id="res">Reset</button><br>
			<hr>
			<p class="text2">Already have an Account,<br><a href="eform2.php">Login</a></p><br>
			</form>
		</div>					
	</body>
</html>