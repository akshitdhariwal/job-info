<?php
$servername = "localhost";
$firstname = "";
$lastname = "";

// Create connection
$connect=mysqli_connect('$servername', '$firstname', '$lastname');

// Check connection
if (mysqli_connect_errno($connect))
	{
    echo "failed to connect";
} 
?>