<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "@Ibmol20017";
$dbName = "ebuhlantidb";

$conn2 = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn2){
    die("Connection failed: ".mysqli_connect_error());
}