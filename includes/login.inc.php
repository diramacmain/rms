<?php 
if(isset($_POST['login-submit']))
{
    require 'dbh.inc.php';
    $username = $_POST['logInUid'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tusers WHERE userName =? OR userEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location:../login.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt,"ss",$username, $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result))
        {
            $pwdCheck = password_verify($password, $row['userPass']);
            if($pwdCheck == false)
            {
                header("location:../login.php?error=wrongpass");
                exit();
            }
            else if($pwdCheck == true)
            {
                session_start();
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['userId'] = $row['userId'];
                require 'session.inc.php';
                header("location:../index.php");
                exit();
            }
        }
        else
        {
            header("location:../login.php?error=nouser");
            exit();
        }
    }

}//root braket
else
{
    header("location:../login.php?");
    exit();
}
