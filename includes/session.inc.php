<?php 
require 'sitedb.inc.php';
$sql2 = "SELECT * FROM tcustomers WHERE cID =".$_SESSION['userId'];
$result = $conn2->query($sql2);

if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION['CustomerType'] = $row["CustomerType"];
        }
    } 
  else 
  {
    header("location:../login.php?error=nouser");
    exit();
  }
  $conn->close();