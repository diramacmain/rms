<?php
if(isset($_POST['searchn'])){
    require 'sitedb.inc.php';
    $mobile = $_POST['mobile'];
    $sql = "SELECT * FROM tcustomers WHERE CellNumber = ?";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=request_loan&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"s", $mobile);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $name = $row['Name'];
                $surname = $row['Surname'];
                $idnumber = $row['idNumber'];
                $cid = $row['cID'];
            }
            else
            {
                header("location:../login.php?error=sqlresultrow");
                exit();
            }
        }
    header("location:../index.php?page=request_loan&Mobile=".$mobile);
    exit();
}
else{
    header("location:../index.php?page=request_loan&error=notsearched");
    exit();
}