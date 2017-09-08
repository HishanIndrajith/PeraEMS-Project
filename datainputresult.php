<!DOCTYPE html>
<html>
<body>
<div align="Center">
	<div align="Left" style=" width: 100%; padding-left:5px" >
	<?php
		
		?> 
	<?php
		if(trim($_POST['name'])!='' and isset($_POST['regNo']) and isset($_POST['gender']) and isset($_POST['bday'])
			and isset($_POST['fac']) and isset($_POST['hostel']) and isset($_POST['address']) and isset($_POST['height'])
		and isset($_POST['weight']) and isset($_POST['height'])){
			
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
			$sql="INSERT INTO PATIENT VALUES (
			'". $_POST['regNo'] . "',
			'". $_POST['name'] . "',
			'". $_POST['gender'] . "',
			'". $_POST['bday'] . "',
			'". $_POST['fac'] . "',
			'". $_POST['hostel'] . "',
			'". $_POST['mobile'] . "',
			'". $_POST['guardian'] . "',
			'". $_POST['homephone'] . "',
			'". $_POST['address'] . "',
			'". $_POST['height'] . "',
			'". $_POST['weight'] . "',
			'". $_POST['blooddate'] . "',
			'". $_POST['bloodgroup'] . "',
			'". $_POST['fbc'] . "',
			'". $_POST['platelets'] . "',
			'". $_POST['pressure'] . "',
			'". $_POST['bloodnote'] . "',
			'". $_POST['physicaldate'] . "',
			'". $_POST['skin'] . "',
			'". $_POST['eye'] . "',
			'". $_POST['disabilities'] . "',
			'". $_POST['teeths'] . "',
			'". $_POST['physicalnote'] . "',
			'". $_POST['datediseases'] . "',
			'". $_POST['nonepi'] . "',
			'". $_POST['epi'] . "',
			'". $_POST['longmedi'] . "',
			'". $_POST['gendis'] . "',
			'". $_POST['note3'] . "',
			'". $_POST['namedr'] . "',
			'". $_POST['regnodr'] . "',
			'". $_POST['hospital'] . "'
			)";
			if(mysqli_query($conn,$sql)){
				echo '<h1 align="Center">Saved successfully<h1>';
			}else{
				echo "Error: " .$sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
				
		
		}else{
			echo "First 10 fields exept guardian details and mobile number cannot keep empty";
		}
	?>
	
	</div>
</div>

</body>
</html>