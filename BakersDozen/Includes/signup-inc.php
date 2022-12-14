<?php
    if(isset($_POST["submit"])){
        $firstName = $_POST["name"];
        $lastName = $_POST["surname"];
        $dob = $_POST["dob"];
        $nationality = $_POST["nationality"];
        $emailAddress = $_POST["email"];
        $mobileNumber = $_POST["mobNumber"];
        $password = $_POST["password"];
        $confPassword = $_POST["confirmPassword"];


        require_once "dbh-inc.php";
        require_once "functions-inc.php"; 

        //Validations
        $passwordMatch = passwordMatch($password, $confPassword);
        if(!$passwordMatch){
            header("location: ../signup.php?error=password-doesnt-match");
            exit();
        }

        /*$emptyInputs = emptyInputs($firstName, $lastName, $dob, $nationality, $emailAddress, $mobileNumber, $password, $confPassword);
        if($emptyInputs){
            header("location: ../signup.php?error=emptyInputs");
            exit();
        }

        $invalidEmail = invalidEmail($emailAddress);
        if($invalidEmail){
            header("location: ../signup.php?error=invalidEmail");
            exit();
        }

        if(emailExists($conn, $emailAddress) !== false){
            header("location: ../signup.php?error=email-exists");
            exit();
        }*/

        createUser($conn, $firstName, $lastName, $dob, $emailAddress, $mobileNumber, $nationality, $password);
    }
    else{
        header("location: ../account.php");

    }

?>