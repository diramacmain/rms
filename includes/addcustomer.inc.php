<?php
if(isset($_POST['submit'])){

    require 'sitedb.inc.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mobile = $_POST['mobile'];
    $idNumber = $_POST['idNumber'];
    $customerType = 3;

    $sql ="INSERT INTO tcustomers(Name, Surname, IdNumber, CellNumber, CustomerType) VALUES (?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=request_loan&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"ssisi", $name,$surname,$idNumber,$mobile,$customerType);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn2);
    header("location:../index.php?page=request_loan&success");
    exit();
}
else{
    header("location:../index.php?page=request_loan&error=clientnotadded");
    exit();
}