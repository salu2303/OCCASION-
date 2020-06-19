<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
   // $id=$_SESSION['mid'];
    $id=$_POST['md'];
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="delete  from manager where m_id='$id'";
        $query=$dbhandler->query($sql);
        echo"done";
        header("Location:ahome.php");
        
        
        
 ?>
