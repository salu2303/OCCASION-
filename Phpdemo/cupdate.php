<?php
session_start();
$id=$_SESSION['id'];
try{
    $name=$_POST['name'];
        $add=$_POST['add'];
        $city=$_POST['city'];
        $mob=$_POST['mob'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repass=$_POST['repass'];
        $even=$_POST['eve'];
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');

	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query("update customer set c_name='$name',c_address='$add',c_city='$city',c_mob='$mob',c_email='$email',c_password='$password' where c_id='$id'");
        header("Location:mhome.php");
        
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
<input type="button" name="home" value="HOME" onclick="window.location='index.php'">
