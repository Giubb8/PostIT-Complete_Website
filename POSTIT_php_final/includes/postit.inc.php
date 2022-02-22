<?php
require_once 'dbh.inc.php';
require_once 'ufunction.inc.php';
session_start();
$data=json_decode(file_get_contents("php://input"),true);
$message=$data["message"];

insertpostit($conn,$_SESSION["userid"],$message);



