<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body style="background-color: #008C9A;>
<div align="Center">
	<form action = "releasepatient.php" method="post">
	<div align="Left" style=" width: 450px; padding-left:5px" >
	<h1 align="Center" style="font: bold 30px Calibri; margin-top: 5px; color: #004444">Patient Discharge</h1><br>
	<a style="font: 18px Calibri; color: #99ccff; margin-left:30px">Registration number :</a>
	<input class="input2" type="text" name="regNo"  size="40" style="border: 2px solid #99ccff;color: #99ccff;">
	
	<button  onclick="addtreatment()" class="newpatientbtn" style="width:200px; height:30px; margin-left:192px; margin-top: 8px">Confirm</button>
	</form>
	
	<?php
		if(isset($_POST['regNo'])){
			$regNo=$_POST['regNo'];
			$today =date("Y-m-d");
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "peraems";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql1 = "UPDATE TREATMENT SET RELEASE_DATE = '".$today."' WHERE TREATMENT.REG_NO = '". $regNo. "' AND TREATMENT.RESIDE='true'";
			$sql2 = "UPDATE TREATMENT SET RESIDE = 'false' WHERE TREATMENT.REG_NO = '". $regNo. "' AND TREATMENT.RESIDE='true'";
		
			
			
			
			
			if(mysqli_query($conn,$sql1)){
				echo "<br>Date changed";
			}else{
				echo "Error: " .$sql1 . "<br>" . mysqli_error($conn);
			}
			if(mysqli_query($conn,$sql2)){
				echo "<br>Discharging Successfull";
			}else{
				echo "Error: " .$sql2 . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
				
		}
	?>
	
	</div>
</div>

</body>
</html>