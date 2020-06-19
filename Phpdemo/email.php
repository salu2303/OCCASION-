<?php
    
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
    $mail->Subject="TEst";
    $mail->Body="<h2>Saloni Here</h2>";
    /*if(!$mail->send())
    {
        echo "fail";
    }
    else
    {
        echo "success";
    }*/

  /*  function randomNumber($length) 
    {
        $result = '';
        for($i = 0; $i < $length; $i++) 
        {
            $result .= mt_rand(0, 9);
        }
    return $result;
    }

    $n=  randomNumber(4);
    echo $n;*/