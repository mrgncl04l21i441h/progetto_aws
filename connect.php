<?php
$hostname="database:3306";
$username="root";
$password="root";
$database="aws";

$conn=new mysqli($hostname,$username,$password,$database);

if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
} 

?>