<!DOCTYPE html>
<html>
<body>
<div align="Center">
<br>
<div align="Left" style="border: 1px solid black; width: 645px; padding-left:30px" >
	<h1>Buy T-shirts Online</h1>
	<h2>Fill out the form below and click "Order Now" to order</h2>

	<table>
            <tbody>
            	
	            <form>
	            <tr>
	                <td><b>Search by order number:</b></td>
	                 <td><input type="text" name="username" >
						<input type= "submit" value="Search">
					</td>
	            </tr>
				</form>
				<form action="result.php" method="GET">
                
	            <tr>
	                <td align=Center><b>Chosee your size:</b></td>
	                <td>
	                <input type="radio" name="small" value="small">Small
	                <input type="radio" name="medium" value="medium">Medium
	                <input type="radio" name="large" value="large">Large
					</td>
	            </tr>
	            <tr>
	                <td align=Center><b>Chosee your colour:</b></td>
	                <td><select name="colour">
				            <option>Red</option>
				            <option>Purple</option>
							<option>Blue</option>
				            <option>Green</option>
        				</select>
					</td>
	            </tr>
	            <tr>
	                <td align=Center><b>Extra Items:</b></td>
	                <td>
	                	<input type="checkbox" name="Cap" value="cap">Cap<br>
	                	<input type="checkbox" name="WBand" value="wBand">Wrist Band
					</td>
	            </tr>

	            <tr>
	                <td align=Center><b>Deliver To:</b></td>
	                <td>
	                	<table>
		                	<tr>
		                		<td align=Center>
		                			<b>First Name:</b>
		                		</td>
		                		<td>
		                			<input type="text" name="Fname">
		                		</td>
		                	</tr>
		                	<tr>
		                		<td align=Center>
		                			<b>Last Name:</b>
		                		</td>
		                		<td>
		                			<input type="text" name="Lname">
		                		</td>
		                	</tr>

		                	<tr>
		                		<td align=Center>
		                			<b>Address1:</b>
		                		</td>
		                		<td>
		                			<input type="text" name="Address1">
		                		</td>
		                	</tr>

		                	<tr>
		                		<td align=Center>
		                			<b>Address2:</b>
		                		</td>
		                		<td>
		                			<input type="text" name="Address2">
		                		</td>
		                	</tr>

		                	<tr>
		                		<td align=Center>
		                			<b>Address3:</b>
		                		</td>
		                		<td>
		                			<input type="text" name="Address3">
		                		</td>
		                	</tr>

		                	
	                	</table>
					</td>
	            </tr>

	            <tr>
	                <td align=Center><b>Your Comments:</b></td>
	                <td>
	                	<textarea name="comments" rows="10" cols="50">
            			</textarea>
					</td>
	            </tr>

	            <tr>
	                <td align=Center></td>
	                <td>
	                	<input type="submit" value="Order Now">
					</td>
	            </tr>
				</form>
                
            </tbody>
        </table>	
	</form><br>
	</div>
	<div>

</body>
</html>