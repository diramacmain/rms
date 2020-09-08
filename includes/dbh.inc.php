<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "@Ibmol20017";
$dbName = "logindb";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}