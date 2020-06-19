<?php
session_start();
    $id=$_SESSION['mid'];
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="select * from reply where m_id='$id'";
	$sql1="select * from manqu where m_id='$id'";
        $query=$dbhandler->query($sql);
        $query1=$dbhandler->query($sql1);
        $col = $query->fetch();
       
        $col1 = $query1->fetch();
        
         
        echo "QUETION:".$col1[2].'</br>';
        echo "REPLY:".$col[2].'</br>';
        $sql2="delete  from manqu where m_id='$id'";
        $query=$dbhandler->query($sql2);
        $sql3="delete  from reply where m_id='$id'";
        $query=$dbhandler->query($sql3);
        $sql4="delete  from manqu where m_id='$id'";
        $query=$dbhandler->query($sql4);
        ?>
<button type="button" name="home" value="HOME" onclick="window.location='mhome.php'">HOME</button>
       