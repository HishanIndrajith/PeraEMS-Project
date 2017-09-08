<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body style="background-color: #008C9A;>
<div align="Center">
	<div align="Left" style=" width: 1200px; padding-left:5px" >
	<h1 align="Center" style="font: bold 30px Calibri; margin-top: 5px; color: #004444">Treatments</h1><br>
	<?php
			
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
			
			$sql = "SELECT  * FROM TREATMENT ORDER BY TREATMENT_ID";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo 
					'<a style="font: 18px Calibri; color: #99ccff; margin-left:30px; ">' . $row["REG_NO"]. '</a>' .
					'<a style="font: 18px Calibri; color: #99ccff; margin-left:30px; ">' . "on". '</a>' .
					'<a style="font: 18px Calibri; color: lightgreen; margin-left:30px;">' . $row["DATE"]. '</a>' .
					'<a style="font: 18px Calibri; color: lightgreen; margin-left:30px;">' . $row["TIME"] . '</a>' .
					'<a style="font: 18px Calibri; color: #99ccff; margin-left:30px; ">' . ($row["ILLNESS"]=='' ? '' : ' illness : ') . '</a>' .
					'<a style="font: 18px Calibri; color: #99ccff; margin-left:30px; ">' . $row["ILLNESS"]. '</a>' .
					'<a style="font: 18px Calibri; color: #99ccff; margin-left:30px; ">' . "is now admitted :". '</a>' .
					'<a style="font: 18px Calibri; color: orange; margin-left:30px; ">' . $row["RESIDE"]. '</a>' .
					'<a style="font: 18px Calibri; color: #66ffcc; margin-left:30px;">' . ($row["RESIDE"]=='false' && $row["RELEASE_DATE"] != $row["DATE"]  ? 'Discharged on :'.$row["RELEASE_DATE"]:'') . "<br>";
				}
			
			} else {
				echo "0 results";
			}
	?>
	</div>
</div>

</body>
</html>