<?php
//Controller
session_start();
require (  "../model/db.php" );


$duedate = $_GET["duedate"];
$message = $_GET["message"]; 
$id = $_GET['id'];


 $sql = "UPDATE todos set duedate = '$duedate' , message = '$message' WHERE id = '$id'";

mysql_query($sql);
header("refresh: 0; url = '../view/display_Task.php' ");




?>