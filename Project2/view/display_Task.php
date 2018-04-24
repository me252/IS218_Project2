<?php
session_start();

require "../model/db.php";
$id=$_SESSION['ownerid'];
$sql_u = "SELECT * FROM todos WHERE ownerid = '$id' and isdone = 0 ORDER BY duedate ASC";
$results_u = mysql_query($sql_u);

$sql_c = "SELECT * FROM todos WHERE ownerid = '$id' and isdone != 0 ORDER BY duedate ASC";
$results_c = mysql_query($sql_c);

?>


<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link href ="..\style.css"
rel="stylesheet">
</head>
<body>
<h1>
	Welcome <?php	
	
	echo $_SESSION["fname"] . " " . $_SESSION["lname"]; ?> 
</h1>
<br><br><br><br>

<h2>
Incomplete Tasks
</h2>
<div id= tasks_Table>
<table border=\"1\" style="background-color:white;" ><tr><th>Task ID</th><th>Date Created</th><th>Due Date</th><th>Description</th></tr>
<br>
<?php
while($row = mysql_fetch_array($results_u)){
	
	
	echo "<tr><td>". $row["id"] . "</td>
	<td>" . $row["createddate"] . "</td>
	<td>" . $row["duedate"] . "</td>
	<td>" .  $row["message"] . "</td>
	<td> <form action=\"../view/update_Task.php\" method = \"post\">
					  <input type=\"hidden\" name=\"id\" value=\"".$row['id']."\">
					  <input type=\"submit\" value=\"Edit\">
				</form></td>
	<td> <form action=\"../controller/delete_Task.php\" method = \"post\">
					  <input type=\"hidden\" name=\"id\" value=\"".$row['id']."\">
					  <input type=\"submit\" value=\"Delete\">
				</form></td>
	<td> <form action=\"../controller/complete_Task.php\" method = \"post\">
					  <input type=\"hidden\" name=\"id\" value=\"".$row['id']."\">
					  <input type=\"submit\" value=\"Complete\">
				</form></td>
	</tr>";
}
?>

</table>



<br><br><br>

<h2>
Complete Tasks
</h2>

<table border=\"1\" style="background-color:white;"><tr><th>Task ID</th><th>Date Created</th><th>Due Date</th><th>Description</th></tr>
<br>
<?php
while($row = mysql_fetch_array($results_c)){
	
	
	echo "<tr><td>". $row["id"] . "</td><td>" . $row["createddate"] . "</td><td>" . $row["duedate"] . "</td><td>" .  $row["message"] . "</td></tr>";
}
?>

</table>

</div>


<br><br>
<form action="../view/add_Task.php">
  <input type="hidden" name="ownerid" value="<?php echo $_SESSION['ownerid'];?>">
  <input type="submit" value="Add Task">
</form>

</body>
</html>

