<?php
if(isset($_POST['submit'])){
    session_start();
    require 'sitedb.inc.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mobile = $_POST['mobile'];
    $cid = $_POST['cid'];
    $amount = $_POST['amount'];
    $lastActor = $_SESSION['userId'];
    $ReqType = $_POST['loantype'];
    $ReqStatus = 1;
    $reqDateInit = date("Ymd");

    $sql ="INSERT INTO trequests(CustomerName, CustomerSurname,cID, CellNumber,ReqAmount,LastActor,ReqType,ReqStatus,StartDate,StatusChangeDate) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=request_loan&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"ssisiiiiss", $name,$surname,$cid,$mobile,$amount,$lastActor,$ReqType,$ReqStatus,$reqDateInit,$reqDateInit);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn2);
    header("location:../index.php?page=request_loan&success=requestmade");
    exit();
}
else{
    header("location:../index.php?page=request_loan&error=requestnotmade");
    exit();
}


