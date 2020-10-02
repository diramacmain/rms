<?php
if(isset($_POST['submit'])){
    session_start();
    require 'sitedb.inc.php';
    $reqID = $_POST['reqID'];
    $ExpAmount = $_POST['ExpAmount'];
    $payment = $_POST['payment'];
    $currentuser = $_SESSION['userId'];
    $balance = $_POST['balance'];
    $ReqStatus = 1;

    $sql ="INSERT INTO tpaymants(cID, Name, ReqAmount, StartDate, ReqStatus, ReqType, UserCreated, StatusChangeDate, LastActor) VALUES (?,?,?,CURRENT_TIMESTAMP(),?,?,?,CURRENT_TIMESTAMP(),?)";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=request_loan&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"isdiiii",$cid,$name,$amount,$ReqStatus,$ReqType,$currentuser,$currentuser);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn2);
    header("location:../index.php?page=loan_payment&success=requestmade");
    exit();
}
else{
    header("location:../index.php?page=loan_paymenta&error=requestnotmade");
    exit();
}


