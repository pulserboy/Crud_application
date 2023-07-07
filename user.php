<?php

define("HOSTNAME","localhost");
define("USERNAME", "root");
define("PASSWORD","");
define("DATABASE", "mydb");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$connection)
 {
    die("Connection Failed");
 }

 else
 {
     echo "   NOW YOU SUCCESSFULLY CONNECT WITH DATABASE";
 }

 ?>