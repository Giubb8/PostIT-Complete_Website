<?php 
//file per stabilire la comunicazione con il server
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "PostITdb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
}
