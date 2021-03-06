<html>
<head>
	<title>Login form</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
			body{
			font-family: 'Roboto', sans-serif;
			background-image : url("background.jpg");
			font-size : 25;
			text-align : center;
		}
		.box {
			text-align : left;
			display : inline-block;
			background-color : white;
			border : 2px solid white;
			border-radius : 3px;
			height : 84%;
			margin-top : 20px;
			margin-bottom : 20px;
			padding : 50px;
			padding-top : 20px;
			color : #6a6464;
		}
		.input01 {
			position : relative;
			display : block;
			width : 100%;
			padding : 0;
			margin-bottom : 20px;
			z-index : 1;
		}
		h2 {
			font-weight : 500;
			font-family : italic;
			margin-bottom : 15px;
		}
		hr {
			padding : 1px;
			width : 100%;
			opacity : 65%;
			background-color : #dedede;
			border : 0;
			margin-bottom : 30px;
		}
		.icon{
			display : flex;
			position : absolute;
			margin-left : 10px;
			margin-top : -48px;
			font-size : 30px;
			align-items : center;
		}
		.input001{
			display : block;
			background-color : #dedede;
			padding : 0 40px 0 50px;
			border : 1px solid #dedede;
			border-radius : 3px;
			width : 100%;
			font-size : 15px;
			height : 62px;
			outline : 0px;
		}
		#login {
			background-color : #d33f8d;
			border : 2px solid #d33f8d;
			border-radius : 3px;
			padding : 16px;
			color : white;
			text-transform : uppercase;
			font-size : 16px;
			width : 100%;
			cursor : pointer;
			transition : all 0.4s;
			margin-bottom : 10px;
		}
		#login:hover{
			background-color : #211f1d;
			border : 2px solid #211f1d;
			cursor : pointer;
		}
		.checkbox{
			display : inline-block;
			border : 2px solid #d33f8d;
			color : #d33f8d;
			border-radius  :3px;
			background-color : white;
			padding : 10px;
			margin-bottom : 20px;
			font-size : 17px;
		}
		.labelcheck,.check{
			cursor : pointer;
		}
		.focus {
			display: block;
			position: absolute;
			border-radius: 3px;
			bottom: 0;
			left: 0;
			z-index : -1;
			width: 100%;
			height: 100%;
			box-shadow: 0 0 0 0;
			color: rgba(211,63,141, 0.6);
		}
		.input001:focus + .focus{
			animation : anim-shadow 0.5s ease-in-out forwards;
		}
		@keyframes anim-shadow {
			to {
				box-shadow: 0px 0px 60px 50px;
				opacity: 0;
			}
		}
		
		.input001:focus + .focus + .icon {
			color: #d33f8d;
		}
		.error {
			text-align : left;
			display : block;
			padding : 3px;
			float : right;
			margin-top : -64px;
			padding-left : 0;
			padding-top : 0;
			content : none;
			cursor : default;
			color : red;
		}
		.validation{
			margin-right : 8px;
			font-size : 10px;
		}
		p {
			font-size : 20px;
			margin-top : -15px;
		}
		p a{
			text-decoration : none;
		}
	</style>
</head>
<body>
<?php
include("login.php"); 
?>
	<div class="box">
		<h2>Attendance Login Form</h2>
		<hr>
		<form method="post" action="">
			<div class="input01">
				<input class="input001" type="text" name="enroll" placeholder="EnrollmentId">
				<span class="focus"></span>
				<span class="icon">
					<span class="fa fa-user-o">
					</span>
				</span>
				<span class="error"><span class="validation"><?php echo "$enrollErr";?></span>*</span>
			</div>
			<div class="input01">
				<input class="input001" type="password" name="pass" placeholder="**************">
				<span class="focus"></span>
				<span class="icon">
					<span class="fa fa-lock">
					</span>
				</span>
				<span class="error"><span class="validation"><?php echo "$passErr";?></span>*</span>
			</div>
			<div class="checkbox">
				<input class="check" id="ckb1" type="checkbox" name="remember-me">
				<label class="labelcheck" for="ckb1">
					Remember me
				</label>
			</div><br>
			<button type="Submit" name="Submit" id="login">Login</button>
			<hr>
			<p>If you are new here, <a href="eform.php">Click Here</a></p>
		</form>
	</div>
</body>
</html>