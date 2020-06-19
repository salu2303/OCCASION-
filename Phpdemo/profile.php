<?php
session_start();
$id=$_SESSION['id'];
echo $_SESSION['id'];
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');

	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query("select * from customer where c_id='$id'");
echo "<center>";
$col = $query->fetch(); 
        echo "id:".$col[0].'</br>';
        echo "name:".$col[1]."</br>";
        echo "adress:".$col[2]."</br>";
        echo "city:".$col[3]."</br>";
       echo "mobile:".$col[4]."</br>";
        echo "email:".$col[5]."</br>";
        echo "password:".$col[6]."</br>";
echo "</center>";
        
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
<input type="button" name="home" value="HOME" onclick="window.location='chome.php'">
