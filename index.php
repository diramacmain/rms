<?php 
session_start();
if(isset($_SESSION['userId'])){
    require "header.php";
    require "content.php";
    require "footer.php";
}
else{
    require "login.php";
}
?>