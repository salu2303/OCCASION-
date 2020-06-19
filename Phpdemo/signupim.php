<?php
try{
        $name=$_POST['name'];
        $add=$_POST['add'];
        $city=$_POST['city'];
        $mob=$_POST['mob'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repass=$_POST['repass'];
        $even=$_POST['eventtype'];
        if($password==$repass)
        {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into manager (m_name,m_address,m_city,m_mob,m_email,m_password,m_eventtype) values ('$name','$add','$city','$mob','$email','$password','$even')";
	$query=$dbhandler->query($sql);
	require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    
    $mail->Username='vrajp6638@gmail.com';
    $mail->Password='Divya@2002';
    
    $mail->setFrom('vrajp6638@gmail.com');
    $mail->addAddress($email);
    $mail->addReplyTo('vrajp6638@gmail.com');
    
    $mail->isHTML();
    $mail->Subject="EVENTO MANAGEMENT";
   $mail->Body="<h2>Hello, $name CONGRATULATIONS....As you have requested for the manager post,you are selected....your time schedule will be provided soon..THANKS.</h2>";
    
    if(!$mail->send())
    {
        echo "fail";
    }
    else
    {
        echo "success";
    }
          }
 else {
   
      header("Location:signupm.php");
   echo "data must be matched";
      
 }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
   <p align="right">   <input type="button" name="logout" value="BACK" onclick="window.location='ahome.php'">
   </p>