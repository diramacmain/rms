<?php
if(isset($_POST['searchn'])){
    require 'sitedb.inc.php';
    $mobile = $_POST['mobile'];


    $sql = "SELECT * FROM tcustomers WHERE Mobile = ?";
    $stmt = mysqli_stmt_init($conn2);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?page=request_loan&error=sqlerror");
            exit();
            }
        else{
            mysqli_stmt_bind_param($stmt,"s",$mobile);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // $row = mysqli_fetch_assoc($result);
            
            if(!$row = mysqli_fetch_assoc($result)){
                header("location:../index.php?page=request_loan&error=numnotfound");
                exit();
            }
            else
            {
                $n = $row['Name'];
                $s = $row['Surname'];
                $i = $row['IdNumber'];
                $c = $row['cID'];
                $m = $row['Mobile'];
            }
        }
    header("location:../index.php?page=request_loan&success=userfound&n=".$n."&s=".$s."&i=".$i."&c=".$c."&m=".$m);
    exit();
}
else{
    header("location:../index.php?page=request_loan&error=notsearched");
    exit();
}