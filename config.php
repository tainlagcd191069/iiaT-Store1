<?php
$conn_string = "host = ec2-54-211-176-156.compute-1.amazonaws.com"
        . " port = 5432"
        . " dbname = d7k35e83nt54kf"
        . " user = lkblfujpnveoph"
        . " password = a2dda41d2a64a9bc1de4ccc447742ff9c32185457810c259326670ce98c0fc42";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } 
?>