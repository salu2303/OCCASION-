<!DOCTYPE html> 
<html> 
	
<head>  
</head> 

<body >  
	
	<?php
       
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//$sql="select * from reply where m_id='$id'";
	$sql1="select * from manqu ";
      //  $query=$dbhandler->query($sql);
        $query1=$dbhandler->query($sql1);
        
        while($col = $query1->fetch())
        {
        echo "manager_id:".$col[1].'</br>';
        echo "quetion:".$col[2].'</br>';
        ?>
    <form action="answer.php" method="post">
    MAN_ID<input type="text" name="id" >
    <textarea name="reply" rows="5" cols="5"></textarea>
<input type="submit" value="reply"></form>    
    <?php
        
        }
          
     
		 
	?> 

	 
</body> 

</html> 
