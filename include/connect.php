<?php
session_start();
$servername = "localhost";
$username = "moduleSixAssignmentSixName";
$password = "Qn1kWEtMwefdo7.7";
$databasename = "moduleSixAssignmentSix";

// Create connection
$connect = mysqli_connect($servername,$username,$password,$databasename);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

?>