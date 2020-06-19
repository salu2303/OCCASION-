<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<head>
    <style>
        center{
            background-color:bisque;
        }
        </style>
</head><center>
<h3>SELECT EVENT FOR DELETION:</h3>
<form action="dele.php" method="post">
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
    <input type="submit" value="OK"></form>
<img src="a.jpg" height="500" width="1000">
</center>