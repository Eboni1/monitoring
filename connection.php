<?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "monitoring";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname))
{
    die("Failed to Connect");
}