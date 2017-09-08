<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color: #008C9A;>
<?php
	$eno=$_GET['regNo']; 
	
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
			$sql="SELECT * FROM PATIENT WHERE REGNO ='" . $eno ."'";
			$result=$conn->query($sql);
			$found='yes';
			if($result->num_rows >0){
				
				while($row = $result->fetch_assoc()){
					$id = $row["REGNO"];
					$name = $row["NAME"];
					$bday = $row["BIRTHDAY"];
					$today =date("Y-m-d");
					$diff=date_diff(date_create($bday),date_create($today));
					
					$age= $diff->format('%y');
					$gender = $row["GENDER"]=='M' ? 'Male':'Female';
					$fac = $row["FACULTY"];
					$hostel = $row["HOSTEL"];
					$mobile = $row["MOBILE"];
					$address = $row["ADDRESS"];
					$height = $row["HEIGHT"];
					$weight = $row["WEIGHT"];
					$guardianname = $row["GUARDIAN_NAME"];
					$guardianno = $row["GUARDIAN_NUMBER"];
					
					$bloodDATE = $row["BLOOD_DATE"];
					$bloodgroup = $row["BLOOD_GROUP"];
					$bloodFBC = $row["BLOOD_FBC"];
					$bloodPlatelets = $row["BLOOD_PLATELETS"];
					$bloodpressure = $row["BLOOD_PRESSURE"];
					$bloodnote = $row["BLOOD_NOTE"];
					$physicalDate = $row["PHYSICAL_DATE"];
					$physicalSkin = $row["PHYSICAL_SKIN"];
					$physicalEye = $row["PHYSICAL_EYE"];
					$physicalDissabilities = $row["PHYSICAL_DISSABILITIES"];
					$physicalTeeths = $row["PHYSICAL_TEETHS"];
					$physicalnote= $row["PHYSICAL_NOTE"];
					$diseaseDate = $row["DISEASE_DATE"];
					$diseaseNonEpi = $row["DISEASE_NONEPI"];
					$diseaseEpi = $row["DISEASE_EPI"];
					$diseaseLTD = $row["DISEASE_LONGTERM_MED"];
					$diseaseGenetic = $row["DISEASE_GENETIC"];
					$diseaseNote = $row["DISEASE_NOTE"];
					$drname = $row["DOCTOR_NAME"];
					$drno = $row["DOCTOR_NO"];
					$drhospital = $row["DOCTOR_HOSPITAL"];
				}
			}else{
				$found='no';
			}
			
			mysqli_close($conn);
?>

<div align="Left" style=" width: 685px;" >

<h1 align="Center" style="font: bold 30px Calibri; margin-top: 5px; color: #004444">Patient Details</h1>
<?php
if($found !='no'){
	echo '<table style="width: 500px; height: 150px; margin-left: 30px; float: left">
            <tbody>
	            <tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Registration No :<br></b></td>
	                <td><b style="font: bold 16px Calibri; color: white">'. $id .'<br></b></td>
				</tr>
	            <tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Name :<br></b></td>
	                <td><b id="name" style="font: bold 16px Calibri; color: white">' . $name .'<br></b></td>
				</tr>
				<tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Age :<br></b></td>
	                <td><b id="age" style="font: bold 16px Calibri; color: white">'. $age .'<br></b></td>
				</tr>
				<tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Gender :<br></b></td>
	                <td><b id="gender" style="font: bold 16px Calibri; color: white">'. $gender .'<br></b></td>
				</tr>
				<tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Faculty :<br></b></td>
	                <td><b id="fac" style="font: bold 16px Calibri; color: white">'. $fac .'<br></b></td>
				</tr>
				<tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Hostel :<br></b></td>
	                <td><b style="font: bold 16px Calibri; color: white">'. $hostel .'<br></b></td>
				</tr>
				<tr>
	                <td><b style="font: bold 16px Calibri; color: #99ccff">Mobile :<br></b></td>
	                <td><b style="font: bold 16px Calibri; color: white">'. $mobile .'<br></b></td>
				</tr>
				
            </tbody>
        </table>
		<div style="background-color:black; width:120px;height:150px; float:left">
		<img style=" width:120px; height: 150px" src="patientimages/'. explode('/',$id)[0] . explode('/',$id)[1] . explode('/',$id)[2] .'.png" alt=""/>
		</div>
        <br>
		<table style="width: 650px; height: auto; margin-left: 30px; float: left">
		<tr>
	       <td width="100px"><b style="font: bold 16px Calibri; color: #99ccff">Address :</b></td>
	       <td><b style="font: bold 16px Calibri; color: white">'. $address .'</b></td>
		</tr>
		<table>
		<table style="width: 650px; height: auto; margin-left: 30px;margin-bottom:20px; float: left">
		<tr>
	       <td width="100px"><b style="font: bold 16px Calibri; color: #99ccff">Height (cm) :</b></td>
	       <td><b style="font: bold 16px Calibri; color: white">'. $height .'</b></td>
		   <td width="100px"><b style="font: bold 16px Calibri; color: #99ccff">Weight (kg) :</b></td>
	       <td><b style="font: bold 16px Calibri; color: white">'. $weight .'</b></td>
		</tr>
		<tr>
	       <td width="100px"><b style="font: bold 16px Calibri; color: #99ccff">Guardian Name :</b></td>
	       <td><b style="font: bold 16px Calibri; color: white">'. $guardianname .'</b></td>
		   <td width="100px"><b style="font: bold 16px Calibri; color: #99ccff">Guardian Phone:</b></td>
	       <td><b style="font: bold 16px Calibri; color: white">'. $guardianno.'</b></td>
		</tr></table>';
		
		echo '<div style="width:90%; margin-left:32px;float:left">
		<b style="font: bold 16px Calibri; color: #ffccff"><u>Blood</u></b>
		<b style="font: bold 16px Calibri; color: #ffccff">(Checked on '. $bloodDATE .')</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff">Blood-Group:</b>
		<b style="font: bold 16px Calibri; color: white">'. $bloodgroup .'<b>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">FBC count:</b>
		<b style="font: bold 16px Calibri; color: white">'. $bloodFBC .'</b>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Platelets Count:</b>
		<b style="font: bold 16px Calibri; color: white">'. $bloodPlatelets .'</b>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Blood Pressure:</b>
		<b style="font: bold 16px Calibri; color: white">'. $bloodpressure .'</b>
		<br>
		<b style="font: bold 16px Calibri; color: #99ccff; ">Note :</b>
		<b style="font: bold 16px Calibri; color: white">'. $bloodnote .'</b><br><br>
		</div>';
		
		echo '<div style="width:90%; margin-left:32px;float:left">
		<b style="font: bold 16px Calibri; color: #ffccff"><u>Physical Problems</u></b>
		<b style="font: bold 16px Calibri; color: #ffccff">(Checked on '. $physicalDate .')</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Skin:</b>
		<b style="font: bold 16px Calibri; color: white">'. $physicalSkin .'<b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Eye:</b>
		<b style="font: bold 16px Calibri; color: white">'. $physicalEye .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">physical dissabilities:</b>
		<b style="font: bold 16px Calibri; color: white">'. $physicalDissabilities .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Teeths:</b>
		<b style="font: bold 16px Calibri; color: white">'. $physicalTeeths .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px ">Note :</b>
		<b style="font: bold 16px Calibri; color: white">'. $physicalnote .'</b><br>
		</div>';
		
		
		
		echo '<div style="width:90%; margin-left:32px;float:left">
		<b style="font: bold 16px Calibri; color: #ffccff"><u>Diseases</u></b>
		<b style="font: bold 16px Calibri; color: #ffccff">(Checked on '. $diseaseDate .')</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Non-Epidemic diseases:</b>
		<b style="font: bold 16px Calibri; color: white">'. $diseaseNonEpi .'<b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Epidemic diseases:</b>
		<b style="font: bold 16px Calibri; color: white">'. $diseaseEpi .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Long term medicines:</b>
		<b style="font: bold 16px Calibri; color: white">'. $diseaseLTD .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Genetic diseases:</b>
		<b style="font: bold 16px Calibri; color: white">'. $diseaseGenetic .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px ">Note :</b>
		<b style="font: bold 16px Calibri; color: white">'. $diseaseNote .'</b><br>
		</div>';
		
		echo '<div style="width:90%; margin-left:32px;float:left">
		<b style="font: bold 16px Calibri; color: #ffccff"><u>Checked and Confirmed by</u></b><br>
		<b style="font: bold 16px Calibri; color: white; margin-left: 20px">'. $drname .'</b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Registration no:</b>
		<b style="font: bold 16px Calibri; color: white">'. $drno .'<b><br>
		<b style="font: bold 16px Calibri; color: #99ccff; margin-left: 20px">Hospital:</b>
		<b style="font: bold 16px Calibri; color: white">'. $drhospital .'</b><br><br><br>
		</div>';
}else{
	echo "Registration number entered is not found";
}
	?>
		
		
	<br>
	</div>

</body>
</html>