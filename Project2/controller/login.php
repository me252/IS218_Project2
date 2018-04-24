<?php
//Controller
session_start(); 

require (  "../model/db.php" );

	
//INPUT
$email  =  $_GET[ "email"  ];
$password  =  $_GET[ "password"  ];

function login_chk($email , $password){
	$cred = "SELECT * from accounts WHERE email = '$email'"; 
	$cred_check = mysql_query($cred); 
	$r = mysql_fetch_array($cred_check);
	if ($r["email"] != $email) header("refresh: 0; url = '../view/login_fail.php' ");
	if ($r["email"] == $email) {
		if ($r["password"] != $password) header("refresh: 0; url = '../view/login_fail.php' ");
		if ($r["password"] == $password) {
			$_SESSION ["fname"] = $r["fname"];
			$_SESSION ["lname"] = $r["lname"];
			$_SESSION ["email"] = $r["email"];
			$_SESSION ["ownerid"] = $r["id"];
			header("refresh: 0; url = '../view/display_Task.php' ");
		}
	}
}

login_chk ($email , $password);
?>