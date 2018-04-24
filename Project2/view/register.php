<!DOCTYPE html>
<html>
<head>
<link href ="..\style.css"
rel="stylesheet">
<title>IS218 Project 2 Registration Page</title>
</head>
<h1>Sign up!</h1>
<body>         
<br><br><br>


<form action = "..\controller\register.php">

<div id="form">
    <br>
    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" required><br>
    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" required><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required><br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" required><br>
    <label for="dob">Date of Birth:</label>
    <input type="text" name="birthday" id="birthday" required><br>
    <label for="gender">Gender:</label><br>
    <input type="radio" name="gender" value="male" required> Male<br>
    <input type="radio" name="gender" value="female" required> Female<br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input id= "button" type="submit">
    <input id= "reset" type="reset">
</div>
</form>
<br>
<br>
<a href="..\index.php">Already have an account? Click Here to Login!</a>
<br>

</body>

</html>