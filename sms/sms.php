<?php
session_start();
error_reporting(E_ALL);
include("../src/Mailer.php");
$sendEmail = new Mailer($_SESSION, $_POST);
$sendEmail->sendEmail();
?>