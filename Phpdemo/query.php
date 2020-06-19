<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
    $q=$_GET['q'];
    $id=$_SESSION['mid'];
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test ','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql1="select m_id from manqu where m_id='$id'";
	$query1=$dbhandler->query($sql1);
//        echo "($query1->rowCount())";
  $c=$query1->rowCount();
  echo "$c";
        if(($query1->rowCount())!=0)
	{
            echo"sorry";
        }
        else{
        $sql="insert into manqu (m_id,querys) values ('$id','$q')";
	$query=$dbhandler->query($sql);
        echo "U WILL GET REPLY SOON!!!";
        }
        
 ?>
<button type="button" name="home" value="HOME" onclick="window.location='mhome.php'">HOME</button>
         