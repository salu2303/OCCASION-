<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table eventtype (
	eventtype VARCHAR(25) NOT NULL
   
        )";
	$query=$dbhandler->query($sql);
	echo "Table is created successfully";
		
		
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>