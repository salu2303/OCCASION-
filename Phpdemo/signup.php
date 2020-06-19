<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method='post'>
		<center>
		<table border="4">
			<tr>
				<td>Name:</td>
				<td><input type='text' name='c_name' required="true"></td>
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
			<tr>s
				<td>Password:</td>
				<td><input type='text' name='password' required="true"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type='text' name='repass' required="true"></td>
			</tr>
			<tr>
				<td>Event Type</td>
			<td>
				<select name='eventtype' required="true">
                                    <option selected="selected">--SELECT PRODUCT--</option>
		<?php
			
			try{
				$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
				//echo "Connection is established...<br/>";
				$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
				$query=$dbhandler->query('select * from eventtype');
		while($r=$query->fetch()){
			?>
			<option value="<?php echo $r[0]; ?>"><?php echo $r[0]; ?></option>
			<?php
			}
		}
			catch(PDOException $e){
				echo $e->getMessage();
				die();
			}
		?>
		</select>
		</td>	
		</tr>
		</table>
		<input type="submit" name='submit'>
	</center>
</body>
</html>