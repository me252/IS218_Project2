<?php 
session_start();
$_SESSION["task_id"] = $_POST['id'];
?>

<!DOCTYPE html>
<html>
<head>
<link href ="..\style.css"
rel="stylesheet">
<title>IS218 Project Update Task Page</title>
</head>
<h1>Update Task Page</h1>
<body>         
<br><br><br>


<form action = "..\controller\update_Task.php" method = "post" >

<div id="form">
    <br>
    <label for="duedate">Due Date:</label>
    <input type="text" name="duedate" id="duedate" required><br>
    <label for="message">Message:</label>
    <input type="text" name="message" id="message" required><br>
	 <input type="hidden" name="id" id="id" value = "<?php echo $_SESSION['task_id'];?>" required><br>
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