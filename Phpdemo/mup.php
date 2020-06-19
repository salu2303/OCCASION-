<html>
<head>
    </head>
<body>
	<form action="mupdate.php" method='post'>
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
                        <tr>
				<td>eventtype:</td>
                                <td>
                                    <select name="eve" required="true">
						<option value="Birthday Party">Birthday Party</option>
						<option value="Wedding">Wedding</option>
						<option value="FareWell">FareWell</option>
						<option value="Other">Other</option>
					</select>
                                </td>
			</tr>
		</table>
		<input type="submit" name='submit'>
                <button type="button" name="home" value="HOME" onclick="window.location='mhome.php'">HOME</button>
         
	</center></form>
</body>
</html>