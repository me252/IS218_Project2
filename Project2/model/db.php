<?php
session_start(); 

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors' , 1); 

$hostname = "sql2.njit.edu"     ; 			// or "sql2.njit.edu"   OR "SQL1.NJIT.EDU"
$username = "me252" ;
$project  = "me252" ;
$password = "ghtl8xxNm" ;
mysql_connect ( $hostname, $username, $password )
       or die ( "Unable to connect to MySQL database" ); //used to connect to Database

mysql_select_db( $project );







?>