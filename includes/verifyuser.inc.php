<?php
    require_once 'dbh.inc.php';    
    if(isset($_POST["submit"])){
        

        if(isset($_POST["email"]) && isset($_POST["verificationcode"])){
            $paramEmail = $_POST["email"];
            $paramCode = $_POST["verificationcode"];
        }
        else {
            header("location: ../verifyuser.php?error=missinginfo");
            exit();
        }

        $sql_mailVerificationCode = "SELECT verificationCode from mailverify WHERE userEmail = ?;";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql_mailVerificationCode)){
            header("location: ../verifyuser.php");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "s", $paramEmail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $mailVerificationCode = mysqli_fetch_array($result);
        mysqli_stmt_close($stmt);

        if ($paramCode == $mailVerificationCode[0]){
            $sql_verifyUser = "UPDATE users SET isVerified = 1 WHERE usersEmail = ?;";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql_verifyUser)){
                header("location: ../verifyuser.php");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $paramEmail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $sql_removeMailVerify = "DELETE FROM mailverify WHERE userEmail=?;";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql_removeMailVerify)){
                header("location: ../verifyuser.php");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $paramEmail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header('location: ../index.php');
            exit();
        }
        else {
            header('location: ../verifyuser.php?error="wrongcode"');
            exit();
        }
    }
    else{
        header("location: ../register.php");
        exit();
    }
?>