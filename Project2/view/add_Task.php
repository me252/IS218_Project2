<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href ="..\style.css"
rel="stylesheet">
<title>IS218 Project Add Task Page</title>
</head>
<h1>Add Task Page</h1>
<body>         
<br><br><br>


<form action = "..\controller\add_Task.php"  >

<div id="form">
    <br>
    <label for="duedate">Due Date:</label>
    <input type="text" name="duedate" id="duedate" required><br>
    <label for="message">Message:</label>
    <input type="text" name="message" id="message" required><br>
    <input id= "button" type="submit">
    <input id= "reset" type="reset">
</div>
</form>
<br>
<br>
<a href="display_Tasks.php">Return to Main Page</a>
<br>

</body>

</html>