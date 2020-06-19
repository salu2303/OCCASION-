<?php
session_start();
$id=$_SESSION['mid'];
try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $dbhandler->query("select m_eventtype from manager where m_id='$id' ");
   $col = $query->fetch();
   $event=$col[0];
    $query1 = $dbhandler->query(" select * from customer where c_id IN (select c_id from event where eventtype='$event') ");
     $query2 = $dbhandler->query(" select * from event where eventtype ='$event' ");
       

    while($col1 = $query1->fetch())
    {
        while($col2 = $query2->fetch())
        {
        //echo "$col2[0]"."</br>";
        echo "id:"."$col2[6]"."</br>";
        
        echo "name:"."$col1[1]"."</br>";
        echo "mob:"."$col1[4]"."</br>";
        
        echo "eventtype:"."$col2[1]"."</br>";
        echo "date:"."$col2[2]"."</br>";
        echo "time:"."$col2[3]"."</br>";
        echo "venue:"."$col2[4]"."</br>";
        echo "budget:"."$col2[5]"."</br>";
    
        }
        }
}
catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
?>


