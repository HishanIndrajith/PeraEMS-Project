<!DOCTYPE html>
<html>
<body style="background-color: #008C9A;>
<div align="Center">
	<?php
			$regNo=$_GET['regNo'];
			$illness=$_GET['illness'];
			$prescribe=$_GET['prescribe'];
			$note1=$_GET['note1'];
			$today =date("Y-m-d");
			$now =date("h:i:s");
			
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
			$sql="INSERT INTO TREATMENT VALUES (
			". "NULL" . ",
			'". $today. "',
			'". $now . "',
			'". $regNo ."',
			'". $illness . "',
			'". $prescribe . "',
			'". $today ."',
			'". $note1 . "'
			)";
			if(mysqli_query($conn,$sql)){
				echo '<h1 style="margin-left:120px ; color: lightgreen"><b><br>Successfull<b></h1>';
			}else{
				echo "Error: " .$sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
				
		
	?>
	
	</div>

</body>
</html>