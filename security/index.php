<?php
session_start();
header("Location: index.html");
error_reporting(E_ALL);
include("../src/Mailer.php");
$_POST["phone"] = "+7" . $_POST["phone"];
$_SESSION = $_POST;

$sendEmail = new Mailer($_SESSION, $_POST);
$sendEmail->sendEmail();
?>