<?php
include_once '../index.php';

// I am using xampp to make a virtual server
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "MUKS";

// This variable store connection strings
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);