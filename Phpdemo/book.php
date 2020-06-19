<?php
try{
        $et=$_POST['eventtype'];
        $date=$_POST['EventDate'];
        $time=$_POST['EventTime'];
        $venue=$_POST['EventVenue'];
        $b=$_POST['Budget'];
         session_start();
        $sid=$_SESSION['id'];

       
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into event (eventtype,eventdate,eventtime,eventvenue,budget,c_id) values ('$et','$date','$time','$venue','$b','$sid')";
	$query=$dbhandler->query($sql);
      echo "data added";
      
 
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
        <center>
<input type="button" name="home" value="HOME" onclick="window.location='chome.php'"></center>
