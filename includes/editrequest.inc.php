<?php
if(isset($_POST['submit'])){
    session_start();
    require 'sitedb.inc.php';
    $user = $_SESSION['userId'];
    $reqID = $_POST['reqID'];
    $reqStatus = $_POST['reqStatus'];
    $comment = $_POST['comment'];
  
    $sql ="UPDATE trequests SET lastActor = ?, ReqStatus = ?, StatusChangeDate = CURRENT_TIMESTAMP(), Comments = ?  WHERE reqID = ?;";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=request_loan&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"iisi", $user,$reqStatus,$comment,$reqID);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn2);
    header("location:../index.php?page=request_loan&success=statuschanged");
    exit();
}
else{
    header("location:../index.php?page=request_loan&error=statusnotchanged");
    exit();
}