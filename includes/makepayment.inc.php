<?php
if(isset($_POST['submit'])){
    session_start();
    require 'sitedb.inc.php';
    $reqID = $_POST['reqID'];
    $ExpAmount = $_POST['ExpAmount'];
    $payment = $_POST['payment'];
    $currentuser = $_SESSION['userId'];
    $balance = $_POST['balance'];
    
    $sql ="INSERT INTO tpayments(req_Id,amount,Last_Action_User,payment_Date) VALUES (?,?,?,CURRENT_TIMESTAMP())";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=payments&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"idi",$reqID,$payment,$currentuser);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn2);
    header("location:../index.php?page=payments&success=paymentmade");
    exit();
}
else{
    header("location:../index.php?page=payments&error=paymentnotmade");
    exit();
}


