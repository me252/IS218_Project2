<?php
session_start();

require "../model/db.php";
$task_id = $_POST['id'];
$sql = "UPDATE todos set isdone = '1' WHERE id = '$task_id'";
mysql_query($sql);
header("refresh: 0; url = '../view/display_Task.php' ");

?>