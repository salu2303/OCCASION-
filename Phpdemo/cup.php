<html>
<head>
    </head>
<body>
	<form action="cupdate.php" method='post'>
		<center>
		<table border="4">
			<tr>
				<td>Name:</td>
				<td><input type='text' name='name' required="true"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type='text' name='add' required="true"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type='text' name='city' required="true"></td>
			</tr>
			<tr>
				<td>Mobile no.:</td>
				<td><input type='numeric' name='mob' required="true"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type='text' name='email' required="true"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type='text' name='password' required="true"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type='text' name='repass' required="true"></td>
			</tr>
                        
		</table>
		<input type="submit" name='submit'>
	   <input type="button" name="cancel" value="CANCEL" onclick="window.location='chome.php'">
        
	
                </center></form>
</body>
</html>