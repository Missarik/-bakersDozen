<?php
    if(isset($_POST["submit"])){
        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        require_once "dbh-inc.php";
        require_once "functions-inc.php";

        if(emptyInputLogin($email, $password)){
            header("location:../login.php?error=emptyInputs");
            exit();
        }
        
        loginUser($conn, $email, $password);
    }
    else{
        header("location:../login.php");
        exit();
    }
?>