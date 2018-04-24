
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link href ="style.css"
rel="stylesheet">
</head>
<body>
<h1>Welcome! Please Login Below</h1>                 
<br><br><br>
<form action = "controller\login.php">


<div id="form">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input id= "button" type="submit">
</div>
<br>

<a href="view\register.php">Don't Have an Account? Click Here to Register!</a>
</form>
</body>

</html>