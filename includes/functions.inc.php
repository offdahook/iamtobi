<?php
    
    require_once 'generatemailverification.inc.php';

    function emptyInputRegister($firstname, $lastname, $email, $pwd) {
        $result;

        if(empty($firstname) || empty($lastname) || empty($email) || empty($pwd) ){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function invalidUsername($username) {
        $result;

        if(!preg_match('/^[a-zA-Z0-9]*$/', $username)){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function invalidEmail($email) {
        $result;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function usernameExist($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../register.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if(mysqli_fetch_assoc($resultData)){
            $result = true;
            return $result;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
        
    }

    function createUser($conn, $firstname, $lastname, $email, $username, $pwd, $timestamp) {
        $sql = "INSERT INTO users (usersFirstname, usersLastname, usersEmail, usersUid, usersPwd, userCreatedAt) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../register.php");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt, "sssssi", $firstname, $lastname, $email, $username, $hashedPwd, $timestamp);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        
        generateMailVerification($conn, $firstname, $lastname, $email, 6);   

        header("location: ../verifyuser.php?email=$email");
        exit();
    }
?>