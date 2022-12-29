<?php
    require_once 'sendmail.inc.php';

    function generateMailVerification($conn, $firstname, $lastname, $email, $length){     
        $mailVerificationCode = generateVerifyCode($length);

        $sql = "INSERT INTO mailverify (userEmail, verificationCode) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../register.php?error=mailverificationfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "si", $email, $mailVerificationCode);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        sendMailVerification($firstname, $lastname, $email, $mailVerificationCode);
    }

    function generateVerifyCode($length){
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $verificationCode = '';
        for ($i = 0; $i < $length; $i++) {
            $verificationCode .= $characters[rand(0, $charactersLength - 1)];
        }
        return $verificationCode;
    }

?>