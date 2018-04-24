<?php
//Controller
require (  "../model/db.php" );



//Code to obtain files from the HTML
$fname  =  $_GET[ "fname"  ];
$lname  =  $_GET[ "lname"  ];
$email  =  $_GET[ "email"  ];
$phone  =  $_GET[ "phone"  ];
$birthday  =  $_GET[ "birthday"  ];
$gender  =  $_GET[ "gender"  ];
$password  =  $_GET[ "password"  ];


//Code to check email and register account if it doesn't exist


function register ($fname , $lname, $email, $phone, $birthday, $gender, $password){
    $sql = "SELECT * from accounts WHERE email = '$email'";
    $results = mysql_query($sql); //Query the DB using the $cred line
    $r = mysql_fetch_array($results); //return data from the DB as an array called $r
    if ($r != NULL){ header("refresh: 0; url = '../view/duplicateEmail_fail.php' ");} //tells user if the email is already in use
    if ($r == NULL){
        $reg_cmd = "INSERT INTO accounts (email, fname, lname, phone, birthday, gender, password) VALUES ('$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
        mysql_query($reg_cmd) or die(mysql_error());
        header("refresh: 0; url = '../index.php' ");
        // If the email is not already in database, add a line to the table with the information. Redirect to login.html
    }
}

register($fname , $lname, $email, $phone, $birthday, $gender, $password);


////if all checks out redirect to a page in the view folder

?>