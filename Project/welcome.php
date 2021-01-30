<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "attendance";
$conn = mysqli_connect($host,$user,$password,$db);
$enrollid = $_SESSION['enroll'];
$name = $_SESSION['name'];
?>
<html>
<head>
	<title>Welcome</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="style3.css" rel="stylesheet">
</head>
<body>
	<h2>Welcome, <?php echo $name; ?></h2>
	<a href="logout.php">Sign out</a>
	<div class="text">
		<p>Here is Your Monthly Attendace of the Acedamic Year 2019-2020.</p>
		<span class="inner">
			<p>1:- Present</p>
			<p>0:- Absent</p>
		</span>
	</div>
	<div class="month">
		<h3>August,2019</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/08</th><th>02/08</th><th>03/08</th>
				<th>04/08</th><th>05/08</th><th>06/08</th>
				<th>07/08</th><th>08/08</th><th>09/08</th>
				<th>10/08</th><th>11/08</th><th>12/08</th>
				<th>13/08</th><th>14/08</th><th>15/08</th>
				<th>16/08</th><th>17/08</th><th>18/08</th>
				<th>19/08</th><th>20/08</th><th>21/08</th>
				<th>22/08</th><th>23/08</th><th>24/08</th>
				<th>25/08</th><th>26/08</th><th>27/08</th>
				<th>28/08</th><th>29/08</th><th>30/08</th>
				<th>31/08</th>
			</tr>
			<?php
				$sql="SELECT * FROM aug WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_08']}";?></td>
				<td><?php echo "{$row['02_08']}";?></td>
				<td><?php echo "{$row['03_08']}";?></td>
				<td><?php echo "{$row['04_08']}";?>S</td>
				<td><?php echo "{$row['05_08']}";?></td>
				<td><?php echo "{$row['06_08']}";?></td>
				<td><?php echo "{$row['07_08']}";?></td>
				<td><?php echo "{$row['08_08']}";?></td>
				<td><?php echo "{$row['09_08']}";?></td>
				<td><?php echo "{$row['10_08']}";?></td>
				<td><?php echo "{$row['11_08']}";?>S</td>
				<td><?php echo "{$row['12_08']}";?></td>
				<td><?php echo "{$row['13_08']}";?></td>
				<td><?php echo "{$row['14_08']}";?></td>
				<td><?php echo "{$row['15_08']}";?></td>
				<td><?php echo "{$row['16_08']}";?></td>
				<td><?php echo "{$row['17_08']}";?></td>
				<td><?php echo "{$row['18_08']}";?>S</td>
				<td><?php echo "{$row['19_08']}";?></td>
				<td><?php echo "{$row['20_08']}";?></td>
				<td><?php echo "{$row['21_08']}";?></td>
				<td><?php echo "{$row['22_08']}";?></td>
				<td><?php echo "{$row['23_08']}";?></td>
				<td><?php echo "{$row['24_08']}";?></td>
				<td><?php echo "{$row['25_08']}";?>S</td>
				<td><?php echo "{$row['26_08']}";?></td>
				<td><?php echo "{$row['27_08']}";?></td>
				<td><?php echo "{$row['28_08']}";?></td>
				<td><?php echo "{$row['29_08']}";?></td>
				<td><?php echo "{$row['30_08']}";?></td>
				<td><?php echo "{$row['31_08']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
		<div class="month">
		<h3>September,2019</h3>
		<table class="inner-month"  cellspacing="0">
			<tr>
				<th>01/09</th><th>02/09</th><th>03/09</th>
				<th>04/09</th><th>05/09</th><th>06/09</th>
				<th>07/09</th><th>08/09</th><th>09/09</th>
				<th>10/09</th><th>11/09</th><th>12/09</th>
				<th>13/09</th><th>14/09</th><th>15/09</th>
				<th>16/09</th><th>17/09</th><th>18/09</th>
				<th>19/09</th><th>20/09</th><th>21/09</th>
				<th>22/09</th><th>23/09</th><th>24/09</th>
				<th>25/09</th><th>26/09</th><th>27/09</th>
				<th>28/09</th><th>29/09</th><th>30/09</th>
			</tr>
			<?php
				$sql="SELECT * FROM sept WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_09']}";?>S</td>
				<td><?php echo "{$row['02_09']}";?></td>
				<td><?php echo "{$row['03_09']}";?></td>
				<td><?php echo "{$row['04_09']}";?></td>
				<td><?php echo "{$row['05_09']}";?></td>
				<td><?php echo "{$row['06_09']}";?></td>
				<td><?php echo "{$row['07_09']}";?></td>
				<td><?php echo "{$row['08_09']}";?>S</td>
				<td><?php echo "{$row['09_09']}";?></td>
				<td><?php echo "{$row['10_09']}";?></td>
				<td><?php echo "{$row['11_09']}";?></td>
				<td><?php echo "{$row['12_09']}";?></td>
				<td><?php echo "{$row['13_09']}";?></td>
				<td><?php echo "{$row['14_09']}";?></td>
				<td><?php echo "{$row['15_09']}";?>S</td>
				<td><?php echo "{$row['16_09']}";?></td>
				<td><?php echo "{$row['17_09']}";?></td>
				<td><?php echo "{$row['18_09']}";?></td>
				<td><?php echo "{$row['19_09']}";?></td>
				<td><?php echo "{$row['20_09']}";?></td>
				<td><?php echo "{$row['21_09']}";?></td>
				<td><?php echo "{$row['22_09']}";?>S</td>
				<td><?php echo "{$row['23_09']}";?></td>
				<td><?php echo "{$row['24_09']}";?></td>
				<td><?php echo "{$row['25_09']}";?></td>
				<td><?php echo "{$row['26_09']}";?></td>
				<td><?php echo "{$row['27_09']}";?></td>
				<td><?php echo "{$row['28_09']}";?></td>
				<td><?php echo "{$row['29_09']}";?>S</td>
				<td><?php echo "{$row['30_09']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
		<div class="month">
		<h3>October,2019</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/10</th><th>02/10</th><th>03/10</th>
				<th>04/10</th><th>05/10</th><th>06/10</th>
				<th>07/10</th><th>08/10</th><th>09/10</th>
				<th>10/10</th><th>11/10</th><th>12/10</th>
				<th>13/10</th><th>14/10</th><th>15/10</th>
				<th>16/10</th><th>17/10</th><th>18/10</th>
				<th>19/10</th><th>20/10</th><th>21/10</th>
				<th>22/10</th><th>23/10</th><th>24/10</th>
				<th>25/10</th><th>26/10</th><th>27/10</th>
				<th>28/10</th><th>29/10</th><th>30/10</th>
				<th>31/10</th>
			</tr>
			<?php
				$sql="SELECT * FROM oct WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_10']}";?></td>
				<td><?php echo "{$row['02_10']}";?></td>
				<td><?php echo "{$row['03_10']}";?></td>
				<td><?php echo "{$row['04_10']}";?></td>
				<td><?php echo "{$row['05_10']}";?></td>
				<td><?php echo "{$row['06_10']}";?>S</td>
				<td><?php echo "{$row['07_10']}";?></td>
				<td><?php echo "{$row['08_10']}";?></td>
				<td><?php echo "{$row['09_10']}";?></td>
				<td><?php echo "{$row['10_10']}";?></td>
				<td><?php echo "{$row['11_10']}";?></td>
				<td><?php echo "{$row['12_10']}";?></td>
				<td><?php echo "{$row['13_10']}";?>S</td>
				<td><?php echo "{$row['14_10']}";?></td>
				<td><?php echo "{$row['15_10']}";?></td>
				<td><?php echo "{$row['16_10']}";?></td>
				<td><?php echo "{$row['17_10']}";?></td>
				<td><?php echo "{$row['18_10']}";?></td>
				<td><?php echo "{$row['19_10']}";?></td>
				<td><?php echo "{$row['20_10']}";?>S</td>
				<td><?php echo "{$row['21_10']}";?></td>
				<td><?php echo "{$row['22_10']}";?></td>
				<td><?php echo "{$row['23_10']}";?></td>
				<td><?php echo "{$row['24_10']}";?></td>
				<td><?php echo "{$row['25_10']}";?></td>
				<td><?php echo "{$row['26_10']}";?></td>
				<td><?php echo "{$row['27_10']}";?>S</td>
				<td><?php echo "{$row['28_10']}";?></td>
				<td><?php echo "{$row['29_10']}";?></td>
				<td><?php echo "{$row['30_10']}";?></td>
				<td><?php echo "{$row['31_10']}";?></td>
			</tr>			
			</table>
			<hr>
	</div>
		<div class="month">
		<h3>November,2019</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/11</th><th>02/11</th><th>03/11</th>
				<th>04/11</th><th>05/11</th><th>06/11</th>
				<th>07/11</th><th>08/11</th><th>09/11</th>
				<th>10/11</th><th>11/11</th><th>12/11</th>
				<th>13/11</th><th>14/11</th><th>15/11</th>
				<th>16/11</th><th>17/11</th><th>18/11</th>
				<th>19/11</th><th>20/11</th><th>21/11</th>
				<th>22/11</th><th>23/11</th><th>24/11</th>
				<th>25/11</th><th>26/11</th><th>27/11</th>
				<th>28/11</th><th>29/11</th><th>30/11</th>
			</tr>
			<?php
				$sql="SELECT * FROM nov WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_11']}";?></td>
				<td><?php echo "{$row['02_11']}";?></td>
				<td><?php echo "{$row['03_11']}";?>S</td>
				<td><?php echo "{$row['04_11']}";?></td>
				<td><?php echo "{$row['05_11']}";?></td>
				<td><?php echo "{$row['06_11']}";?></td>
				<td><?php echo "{$row['07_11']}";?></td>
				<td><?php echo "{$row['08_11']}";?></td>
				<td><?php echo "{$row['09_11']}";?></td>
				<td><?php echo "{$row['10_11']}";?>S</td>
				<td><?php echo "{$row['11_11']}";?></td>
				<td><?php echo "{$row['12_11']}";?></td>
				<td><?php echo "{$row['13_11']}";?></td>
				<td><?php echo "{$row['14_11']}";?></td>
				<td><?php echo "{$row['15_11']}";?></td>
				<td><?php echo "{$row['16_11']}";?></td>
				<td><?php echo "{$row['17_11']}";?>S</td>
				<td><?php echo "{$row['18_11']}";?></td>
				<td><?php echo "{$row['19_11']}";?></td>
				<td><?php echo "{$row['20_11']}";?></td>
				<td><?php echo "{$row['21_11']}";?></td>
				<td><?php echo "{$row['22_11']}";?></td>
				<td><?php echo "{$row['23_11']}";?></td>
				<td><?php echo "{$row['24_11']}";?>S</td>
				<td><?php echo "{$row['25_11']}";?></td>
				<td><?php echo "{$row['26_11']}";?></td>
				<td><?php echo "{$row['27_11']}";?></td>
				<td><?php echo "{$row['28_11']}";?></td>
				<td><?php echo "{$row['29_11']}";?></td>
				<td><?php echo "{$row['30_11']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
		<div class="month">
		<h3>December,2019</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/12</th><th>02/12</th><th>03/12</th>
				<th>04/12</th><th>05/12</th><th>06/12</th>
				<th>07/12</th><th>08/12</th><th>09/12</th>
				<th>10/12</th><th>11/12</th><th>12/12</th>
				<th>13/12</th><th>14/12</th><th>15/12</th>
				<th>16/12</th><th>17/12</th><th>18/12</th>
				<th>19/12</th><th>20/12</th><th>21/12</th>
				<th>22/12</th><th>23/12</th><th>24/12</th>
				<th>25/12</th><th>26/12</th><th>27/12</th>
				<th>28/12</th><th>29/12</th><th>30/12</th>
				<th>31/12</th>
			</tr>
			<?php
				$sql="SELECT * FROM decem WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_12']}";?>S</td>
				<td><?php echo "{$row['02_12']}";?></td>
				<td><?php echo "{$row['03_12']}";?></td>
				<td><?php echo "{$row['04_12']}";?></td>
				<td><?php echo "{$row['05_12']}";?></td>
				<td><?php echo "{$row['06_12']}";?></td>
				<td><?php echo "{$row['07_12']}";?></td>
				<td><?php echo "{$row['08_12']}";?>S</td>
				<td><?php echo "{$row['09_12']}";?></td>
				<td><?php echo "{$row['10_12']}";?></td>
				<td><?php echo "{$row['11_12']}";?></td>
				<td><?php echo "{$row['12_12']}";?></td>
				<td><?php echo "{$row['13_12']}";?></td>
				<td><?php echo "{$row['14_12']}";?></td>
				<td><?php echo "{$row['15_12']}";?>S</td>
				<td><?php echo "{$row['16_12']}";?></td>
				<td><?php echo "{$row['17_12']}";?></td>
				<td><?php echo "{$row['18_12']}";?></td>
				<td><?php echo "{$row['19_12']}";?></td>
				<td><?php echo "{$row['20_12']}";?></td>
				<td><?php echo "{$row['21_12']}";?></td>
				<td><?php echo "{$row['22_12']}";?>S</td>
				<td><?php echo "{$row['23_12']}";?></td>
				<td><?php echo "{$row['24_12']}";?></td>
				<td><?php echo "{$row['25_12']}";?></td>
				<td><?php echo "{$row['26_12']}";?></td>
				<td><?php echo "{$row['27_12']}";?></td>
				<td><?php echo "{$row['28_12']}";?></td>
				<td><?php echo "{$row['29_12']}";?>S</td>
				<td><?php echo "{$row['30_12']}";?></td>
				<td><?php echo "{$row['31_12']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
		<div class="month">
		<h3>January,2020</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/01</th><th>02/01</th><th>03/01</th>
				<th>04/01</th><th>05/01</th><th>06/01</th>
				<th>07/01</th><th>08/01</th><th>09/01</th>
				<th>10/01</th><th>11/01</th><th>12/01</th>
				<th>13/01</th><th>14/01</th><th>15/01</th>
				<th>16/01</th><th>17/01</th><th>18/01</th>
				<th>19/01</th><th>20/01</th><th>21/01</th>
				<th>22/01</th><th>23/01</th><th>24/01</th>
				<th>25/01</th><th>26/01</th><th>27/01</th>
				<th>28/01</th><th>29/01</th><th>30/01</th>
				<th>31/01</th>
			</tr>
			<?php
				$sql="SELECT * FROM jan WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_01']}";?></td>
				<td><?php echo "{$row['02_01']}";?></td>
				<td><?php echo "{$row['03_01']}";?></td>
				<td><?php echo "{$row['04_01']}";?></td>
				<td><?php echo "{$row['05_01']}";?>S</td>
				<td><?php echo "{$row['06_01']}";?></td>
				<td><?php echo "{$row['07_01']}";?></td>
				<td><?php echo "{$row['08_01']}";?></td>
				<td><?php echo "{$row['09_01']}";?></td>
				<td><?php echo "{$row['10_01']}";?></td>
				<td><?php echo "{$row['11_01']}";?></td>
				<td><?php echo "{$row['12_01']}";?>S</td>
				<td><?php echo "{$row['13_01']}";?></td>
				<td><?php echo "{$row['14_01']}";?></td>
				<td><?php echo "{$row['15_01']}";?></td>
				<td><?php echo "{$row['16_01']}";?></td>
				<td><?php echo "{$row['17_01']}";?></td>
				<td><?php echo "{$row['18_01']}";?></td>
				<td><?php echo "{$row['19_01']}";?>S</td>
				<td><?php echo "{$row['20_01']}";?></td>
				<td><?php echo "{$row['21_01']}";?></td>
				<td><?php echo "{$row['22_01']}";?></td>
				<td><?php echo "{$row['23_01']}";?></td>
				<td><?php echo "{$row['24_01']}";?></td>
				<td><?php echo "{$row['25_01']}";?></td>
				<td><?php echo "{$row['26_01']}";?>S</td>
				<td><?php echo "{$row['27_01']}";?></td>
				<td><?php echo "{$row['28_01']}";?></td>
				<td><?php echo "{$row['29_01']}";?></td>
				<td><?php echo "{$row['30_01']}";?></td>
				<td><?php echo "{$row['31_01']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
		<div class="month">
		<h3>February,2020</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/02</th><th>02/02</th><th>03/02</th>
				<th>04/02</th><th>05/02</th><th>06/02</th>
				<th>07/02</th><th>08/02</th><th>09/02</th>
				<th>10/02</th><th>11/02</th><th>12/02</th>
				<th>13/02</th><th>14/02</th><th>15/02</th>
				<th>16/02</th><th>17/02</th><th>18/02</th>
				<th>19/02</th><th>20/02</th><th>21/02</th>
				<th>22/02</th><th>23/02</th><th>24/02</th>
				<th>25/02</th><th>26/02</th><th>27/02</th>
				<th>28/02</th><th>29/02</th>
			</tr>
			<?php
				$sql="SELECT * FROM feb WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_02']}";?></td>
				<td><?php echo "{$row['02_02']}";?>S</td>
				<td><?php echo "{$row['03_02']}";?></td>
				<td><?php echo "{$row['04_02']}";?></td>
				<td><?php echo "{$row['05_02']}";?></td>
				<td><?php echo "{$row['06_02']}";?></td>
				<td><?php echo "{$row['07_02']}";?></td>
				<td><?php echo "{$row['08_02']}";?></td>
				<td><?php echo "{$row['09_02']}";?>S</td>
				<td><?php echo "{$row['10_02']}";?></td>
				<td><?php echo "{$row['11_02']}";?></td>
				<td><?php echo "{$row['12_02']}";?></td>
				<td><?php echo "{$row['13_02']}";?></td>
				<td><?php echo "{$row['14_02']}";?></td>
				<td><?php echo "{$row['15_02']}";?></td>
				<td><?php echo "{$row['16_02']}";?>S</td>
				<td><?php echo "{$row['17_02']}";?></td>
				<td><?php echo "{$row['18_02']}";?></td>
				<td><?php echo "{$row['19_02']}";?></td>
				<td><?php echo "{$row['20_02']}";?></td>
				<td><?php echo "{$row['21_02']}";?></td>
				<td><?php echo "{$row['22_02']}";?></td>
				<td><?php echo "{$row['23_02']}";?>S</td>
				<td><?php echo "{$row['24_02']}";?></td>
				<td><?php echo "{$row['25_02']}";?></td>
				<td><?php echo "{$row['26_02']}";?></td>
				<td><?php echo "{$row['27_02']}";?></td>
				<td><?php echo "{$row['28_02']}";?></td>
				<td><?php echo "{$row['29_02']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
		<div class="month">
		<h3>March,2020</h3>
		<table class="inner-month" cellspacing="0">
			<tr>
				<th>01/03</th><th>02/03</th><th>03/03</th>
				<th>04/03</th><th>05/03</th><th>06/03</th>
				<th>07/03</th><th>08/03</th><th>09/03</th>
				<th>10/03</th><th>11/03</th><th>12/03</th>
				<th>13/03</th><th>14/03</th><th>15/03</th>
				<th>16/03</th><th>17/03</th><th>18/03</th>
				<th>19/03</th><th>20/03</th><th>21/03</th>
				<th>22/03</th><th>23/03</th><th>24/03</th>
				<th>25/03</th><th>26/03</th><th>27/03</th>
				<th>28/03</th><th>29/03</th><th>30/03</th>
				<th>31/03</th>
			</tr>
			<?php
				$sql="SELECT * FROM mar WHERE EnrollmentId = $enrollid;";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
			?>
			<tr>
				<td><?php echo "{$row['01_03']}";?>S</td>
				<td><?php echo "{$row['02_03']}";?></td>
				<td><?php echo "{$row['03_03']}";?></td>
				<td><?php echo "{$row['04_03']}";?></td>
				<td><?php echo "{$row['05_03']}";?></td>
				<td><?php echo "{$row['06_03']}";?></td>
				<td><?php echo "{$row['07_03']}";?></td>
				<td><?php echo "{$row['08_03']}";?>S</td>
				<td><?php echo "{$row['09_03']}";?></td>
				<td><?php echo "{$row['10_03']}";?></td>
				<td><?php echo "{$row['11_03']}";?></td>
				<td><?php echo "{$row['12_03']}";?></td>
				<td><?php echo "{$row['13_03']}";?></td>
				<td><?php echo "{$row['14_03']}";?></td>
				<td><?php echo "{$row['15_03']}";?>S</td>
				<td><?php echo "{$row['16_03']}";?></td>
				<td><?php echo "{$row['17_03']}";?></td>
				<td><?php echo "{$row['18_03']}";?></td>
				<td><?php echo "{$row['19_03']}";?></td>
				<td><?php echo "{$row['20_03']}";?></td>
				<td><?php echo "{$row['21_03']}";?></td>
				<td><?php echo "{$row['22_03']}";?>S</td>
				<td><?php echo "{$row['23_03']}";?></td>
				<td><?php echo "{$row['24_03']}";?></td>
				<td><?php echo "{$row['25_03']}";?></td>
				<td><?php echo "{$row['26_03']}";?></td>
				<td><?php echo "{$row['27_03']}";?></td>
				<td><?php echo "{$row['28_03']}";?></td>
				<td><?php echo "{$row['29_03']}";?>S</td>
				<td><?php echo "{$row['30_03']}";?></td>
				<td><?php echo "{$row['31_03']}";?></td>
			</tr>
		</table>
		<hr>
	</div>
</body>
</html>