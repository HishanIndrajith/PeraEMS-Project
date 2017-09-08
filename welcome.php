<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body style="background-image: url(backgnd.png);background-position: top center; background-repeat: no-repeat;">
<div align="Left">
	<div align="Left" style="border-radius: 8px; width: 1440px; height:700px;margin-left: 22px; padding-left:10px" >
	<table align="Left" style="width: 500px; height: 150px">
            <tbody>
	             
	            <tr>
	                <td align="left">
					<form onsubmit="newpatient()">
						<input class="button" style="height: 260px;border-radius: 10px;" type="submit" value="New Patient">
					</form>
					</td>
	                <td align="left">
					<form onsubmit="releasepatient()">
	                 <button class="button1"><span>Discharge</span></button>
					</form>
					<form onsubmit="residentlist()">
	                 <button class="button1"><span>View Admited</span></button>
					</form> 
	                 <button class="button1"><span>See Medicine</span></button>
	                 <button class="button1" style="margin-bottom: 0px"><span>Med Report</span></button>
					</td>
	            </tr>
	            <tr>
	                <td align="left">
						<form onsubmit="treatmentlist()">
						 <button class="button1" style="width:260px;height:120px; margin-left:0px;margin-top:10px"><span>Treatment History</span></button>
						</form>
						<form onsubmit="residentlist()">
						 <button class="button1" style="width:260px;height:128px; margin-left:0px"><span>Get Medicine list</span></button>
						</form> 
					</td>
	                <td align="left">
						<form onsubmit="releasepatient()">
						 <button class="button1"><span>Update Stock</span></button>
						</form>
						<form onsubmit="residentlist()">
						 <button class="button1"><span>View </span></button>
						</form> 
						 <button class="button1"><span>See Medicine</span></button>
						 <button class="button1" style="margin-bottom: 0px"><span>Med Report</span></button>
					</td>
	            </tr>
				<tr>
					<td>
						<div>sss<div>
					</td>
					<td></td>
				</tr>
                
            </tbody>
        </table>
        <form onsubmit="viewpatient2()" method="POST">
        <div style="width:700px; height: 50px; float: right; margin-top: 20px; margin-right: 20px;">
        	<input id="searchbtn" type="submit" value="Advanced Search">
        	<input id="search" class="search1" type="text" name="userid" size="40">
        </div>
        </form>
		<div style="width:570px; float: right; margin-right: 20px;background-color:blue; height:600px;margin-top:24px;opacity: 0.2;padding-left:30px; padding-top:30px">
        	<b style="font: bold 16px Calibri; color: white">No of Patients :<br></b>
        </div>
	
	<?php
		if(isset($_POST['userid']) and isset($_POST['password'])){
			$userid= $_POST['userid'];
			$password= $_POST['password'];
		
			if(!strcmp("d001",$userid) and !strcmp("12345",$password)){
				//echo "Access Granted";
			}else{
				//echo "Access Denied";
			}
		
			 //<h1 style="margin-top:0px">Your Information System</h1>
			 
			 //trim($comment)
			 
		}
	?>
	
	</div>
</div>

</body>
</html>



