<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           $query=$dbhandler->query('select * from customer');
           while($col=$query->fetch()){
               if( $_GET["name"] || $_GET["age"] ) 
               echo $col[1];
           }
         }
catch(PDOException $e){
	echo $e->getMessage();
	die();
}?>
