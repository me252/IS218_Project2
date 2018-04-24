<?php
//Controller
session_start();
require (  "../model/db.php" );

date_default_timezone_set('America/New York');
$date_c = date('Y-m-d G:i:s');
$date_d = $_GET["duedate"];
$message = $_GET["message"];
$id = $_SESSION["ownerid"];
$email = $_SESSION["email"];

$sql = "INSERT INTO todos(owneremail, ownerid, createddate, duedate, message) VALUES ('$email', '$id' , '$date_c', '$date_d', '$message' )";

mysql_query($sql);
header("refresh: 0; url = '../view/display_Task.php' ");


?>