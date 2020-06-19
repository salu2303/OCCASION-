<html>
<head>
	<title>Book Event</title>
</head>
<body>
	<center>
	<form action="book.php" method="post">
		<h2><b>Book Event</b></h2>
		<table>
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
			<tr>
				<td>Event Date:</td>
				<td><input type='Date' name='EventDate' required="true"></td>
			</tr>
			<tr>
				<td>Event Time:</td>
				<td><input type='Time' name='EventTime' required="true"></td>
			</tr>
			<tr>
				<td>Event venue:</td>
				<td><input type='text' name='EventVenue' required="true"></td>
			</tr>
			<tr>
				<td>Budget</td>
				<td><input type='numeric' name='Budget' required="true"></td>
			</tr>
		</table>
		
                <input type="submit" name='submit'/>
	<input type="button" name="logout" value="BACK" onclick="window.location='chome.php'">
   
        </form>
</center>
	</body>
</html>
