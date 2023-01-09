<?php
    require_once "dbh-inc.php";
    require_once "functions-inc.php";

    if(!isset($_POST["submit"])){
        if(isset($_SESSION["emailAddress"])){
            $user = emailExists($conn, $_SESSION["emailAddress"]);
            $firstName = $user["firstName"]; 
            $lastName = $user["lastName"]; 
            $email = $user["emailAddress"]; 
        }
        else{
            header("location:../login.php");
            exit();
        }
    }
    else{
        session_start();

        // nahseb rridu naghmlu din doppja, wahda ghal profile picture u wahda ghad details
        // anke l functions updateuser u hekk bzonn tkun doppja

        if($_POST["submit"] === "upload") {
            if(isset($_SESSION["emailAddress"])) {
                $fileName = $_FILES["userfile"]["name"];
                $fileTempName = $_FILES["userfile"]["tmp_name"];
                $fileSize = $_FILES["userfile"]["size"];
                $fileError = $_FILES["userfile"]["error"];
                $fileType = $_FILES["userfile"]["type"];
    
                $fileExt = explode(".", $fileName);
                $fileActualExt = strtolower(end($fileExt));
    
                $allowed = array("jpg", "jpeg", "png");
    
                if(in_array($fileActualExt, $allowed)) {
                    if($fileError === 0) {
                        if($fileSize < 500) { //500,000kb = 500mb
                            $fileNameNew = uniqid($_SESSION["emailAddress"]."-", true);
                            $fileNameNew = $fileNameNew.".".$fileActualExt;
    
                            $uploadDir = $_SERVER['DOCUMENT_ROOT']."/img/";
                            $uploadFile = $uploadDir.$fileNameNew;
    
                            move_uploaded_file($fileTempName, $uploadFile);
                            header("location:../account.php?error=none");
                            exit();
                        }
                        else {
                            header("location:../account.php?error=fileSize");
                            exit();
                        }
                    }
                    else {
                        header("location:../account.php?error=fileUpload");
                        exit();
                    }
                }
                else {
                    header("location:../account.php?error=fileType");
                    exit();
                }
            }
        }
        else{
            $email = $_SESSION["emailAddress"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
    
            if($_POST["submit"] === "update") {
                updateUser($conn, $email, $firstName, $lastName);
            }
            else if ($_POST["submit"] === "delete") {
                deleteUser($conn, $username);
            }
        }
    }
?>