<?php
    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pwd = $_POST["password"];
        $timestamp = time();

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';       

        if(emptyInputRegister($firstname, $lastname, $email, $pwd) != false){
            header("location: ../register.php?error=emptyinput");
            exit();
        }

        if(invalidUsername($username) != false){
            header("location: ../register.php?error=invalidUsername");
            exit();
        }

        if(invalidEmail($email) != false){
            header("location: ../register.php?error=invalidEmail");
            exit();
        }

        if(usernameExist($conn, $username, $email) != false){
            header("location: ../register.php?error=usernametaken");
            exit();
        }           
        createUser($conn, $firstname, $lastname, $email, $username, $pwd, $timestamp);  
        
    }
    else{
        header("location: ../register.php");
        exit();
    }
?>