<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body style="background-color: #99ccff;">
<div align="Left" style=" margin-left:-10px; width: 110%;" >
	
<h1 align="Center" style="font: bold 30px Calibri; margin-top: 5px; color: #004444">New Patient</h1>



<?php
	$id="";
	$name="";
	$age="";
	$fac="";
	$gender="";
	
	if(isset($_GET['regNo'])){
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
			$sql="SELECT REGNO,NAME,GENDER,BIRTHDAY,FACULTY FROM PATIENT WHERE REGNO ='" . $eno ."'";
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
				}
			}else{
				echo "Registration number not found";
			}
			
			mysqli_close($conn);
			
			
	}else{
	}
?>
	
            
	
		<table>
		<tbody>
		<tr>
			  <td><a style="font: 18px Calibri; color: #004444; margin-left:30px">Registration No</a></td>
			  <td><form onsubmit="viewpatient()" style="margin-left:30px;"><input id="regNo" value="<?php echo $id ?>" class="input2"  type="text" size="40"></form></td>
			  <td><a style="font:italic 16px Calibri; color: green; margin-left:30px">press ENTER to auto generate data</a></td>
		</tr>
		</tbody>
		</table>
		<div style= background-color:#008C9A>
			<table style="width: 500px; margin-left: 30px"><tbody>
	            <tr>
	                <td><a style="font: 18px Calibri; color: #99ccff">Name</a></td>
	                 <td><input class="input2" type="text" value="<?php echo $name ?>" name="name"  size="40" style="border: 2px solid #99ccff;color: #99ccff;"></td>
					 <td><a style="font: 18px Calibri; color: #99ccff; margin-left: 40px">Age</a></td>
	                 <td><input class="input2" type="text" value="<?php echo $age ?>" name="age" size="40" style="border: 2px solid #99ccff;color: #99ccff;"></td>
	            </tr>
				<tr>
	                <td><a style="font: 18px Calibri; color: #99ccff">Gender</a></td>
	                 <td><input class="input2" type="text" value="<?php echo $gender ?>" name="gender" size="40" style="border: 2px solid #99ccff;color: #99ccff;"></td>
					 <td><a style="font:18px Calibri; color: #99ccff; margin-left: 40px">Faculty</a></td>
	                 <td><input  class="input2" type="text" value="<?php echo $fac ?>" name="faculty" size="40" style="border: 2px solid #99ccff;color: #99ccff;"></td>
	            </tr>
                
            </tbody>
     </table>	</div>
					 
					 
					 
<br>
<a style="font: 18px Calibri; color: #004444; margin-left:30px">Detail of the illness</a>
<br>
<textarea id="illness" class="txtarea" style="margin-left: 30px" name="illness" rows="3" cols="70"></textarea>
<br>
<a style="font: 18px Calibri; color: #004444; margin-left:30px">Prescribe to reside in the centre</a>
<input id="prescribe" type="checkbox" style="margin-left:20px" name="reside" value="yes">
<br><br>
<u style="font: 18px Calibri; color: #004444; margin-left:30px;">Prescribe medicines</u><br>


<a style="font: 18px Calibri; color: #004444; margin-left:30px;">medicine</a>
<input id="medicine" class="input2" type="text" name="medicine" size="40" style="border: 2px solid #004444;color: #004444;">
<a style="font: 18px Calibri; color: #004444; margin-left:30px;">amount</a>
<input id="amount" class="input2" type="number" name="amount" size="40" style="border: 2px solid #004444;color: #004444;width:100px">
<button onclick="addMedicinetoList()" class="newpatientbtn" type="submit" size="40">Add</button>
<iframe id="iframe1" src="medicinetable.html" style="width:600px; height: 140px; margin-left:30px; border: none;"></iframe>
<br>
<a style="font: 18px Calibri; color: #004444; margin-left:30px">Any Note</a>
<br>
<textarea id="note1" class="txtarea" style="margin-left: 30px" name="illness" rows="1" cols="70"></textarea>
<br>
<button  onclick="addtreatment()" class="newpatientbtn" style="width:220px; height:40px; margin-left:200px; margin-top: 8px">Submit</button>
</div>
</body>
</html>