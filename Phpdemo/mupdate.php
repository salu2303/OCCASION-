<?php
session_start();
$id=$_SESSION['mid'];
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
	$query=$dbhandler->query("update manager set m_name='$name',m_address='$add',m_city='$city',m_mob='$mob',m_email='$email',m_password='$password',m_eventtype='$even' where m_id='$id'");
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
