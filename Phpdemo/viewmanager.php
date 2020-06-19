<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');

	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query("select * from manager");
while($col = $query->fetch())
{
    echo "<center>";

        echo "id:".$col[0].'</br>';
        echo "name:".$col[1]."</br>";
        echo "event:".$col[7]."</br>";
echo "</center>";

        
}       
        
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<center>
<input type="button" name="home" value="HOME" onclick="window.location='ahome.php'"></center>
