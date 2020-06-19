<?php
    if($_POST['aname']=="saloni" && $_POST['apassword']=="s123s")
        header("Location:ahome.php");
    else
        header("Location:index.php");
?>
