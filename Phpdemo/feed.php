<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $feed=$_POST['fe'];
  $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into feedback (feedback) values ('$feed')";
	$query=$dbhandler->query($sql);
        echo "THANKS FOR RESPONSE!!!";
        ?>
<input type="button" name="home" value="HOME" onclick="window.location='index.php'">
           