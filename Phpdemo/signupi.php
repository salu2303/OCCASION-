<?php
try{
        $name=$_POST['name'];
        $add=$_POST['add'];
        $city=$_POST['city'];
        $mob=$_POST['mob'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repass=$_POST['repass'];
        if($password==$repass)
        {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into customer (c_name,c_address,c_city,c_mob,c_email,c_password) values ('$name','$add','$city','$mob','$email','$password')";
	$query=$dbhandler->query($sql);
	echo "Data is inserted successfully";
        }
 else {
     echo "data must be matched";
 }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>