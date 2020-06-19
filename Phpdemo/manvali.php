<?php

try {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $dbhandler->query('select * from manager');
    $flag=0;
    while ($col = $query->fetch()) {
        if (($_POST["mname"] == $col[1]) && $_POST["mpassword"] == $col[6])
        {//echo "saloni";
            $flag=1;
            $sid=$col[0];
            break;
        }
      
    }
    session_start();
// Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
    $_SESSION['mid'] = $sid;

        if($flag==0)
            header("Location:index.php");
        else{
         
            header("Location:mhome.php");
        }
    //$query=$dbhandler->query($sql);
}
catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
?>
