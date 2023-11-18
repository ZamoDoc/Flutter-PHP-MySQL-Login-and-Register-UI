<?php

$serverHost = "localhost";
$user = "root";
$password = "";
$dbname = "userdata";

$db = new mysqli($serverHost,$user,$password,$dbname);

if(!$db)
{
    echo "Database Connection Failed";
}

?>