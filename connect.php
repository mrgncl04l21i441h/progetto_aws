<?php
$hostname="database:3306";
$dbusername="root";
$dbpassword="root";
$database="aws";

$conn=new mysqli($hostname,$dbusername,$dbpassword,$database);

if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
} 

?>