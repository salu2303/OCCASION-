<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $id=$_POST['id'];
    $rep=$_POST['reply'];
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into reply (m_id,reply) values ('$id','$rep')";
	$query=$dbhandler->query($sql);
        
	
        
        header("Location:ahome.php");
      
        
 ?>
