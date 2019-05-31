<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "id4413131_msimbao";
 $dbpass = "Kaptwamwa3";
 $dbname = "id4413131_inama";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
