<?php

    function createUser($conn, $firstName, $lastName, $dob, $emailAddress, $mobileNumber, $nationality, $password)
    {
        $sql = "INSERT INTO bdUsers (firstName, lastName, dob, emailAddress, mobileNumber, nationality, password) VALUES (?,?,?,?,?,?,?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $dob, $emailAddress, $mobileNumber, $nationality, $hashedPassword);

        mysqli_stmt_execute($stmt);
        echo $stmt->error;
        exit();
        mysqli_stmt_close($stmt);

        header("location:../account.php?error=none");
    }

    function loadUsers($conn){
        //function to load all users from database

        $sql = "SELECT * FROM bdUsers;";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "Couldn't load users";
            exit();
        }

        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    function passwordMatch($password, $confPassword)
    {
        $result = false;
        if($password == $confPassword)
        {
            $result = true;
        }
        return $result;
        

    }
    function emptyInputs($firstName, $lastName, $dob, $nationality, $emailAddress, $mobileNumber, $password, $confPassword){

    $empty = false;
    if(empty($firstName) || empty($lastName) || empty($dob) || empty($nationality) || empty($emailAddress) || empty($mobileNumber) || empty($passowrd) || empty($confPassword)){
    $empty = true;
    }
    return $empty;
}
    function invalidEmail($emailAddress){
        if(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
            return true;
        }
            return false;
}
    function emailExists($conn, $emailAddress){
        $sql = "SELECT * FROM bdUsers WHERE emailAddress = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $emailAddress);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if($row = mysqli_fetch_assoc($result)){
            return $row;
        }
        else{
            //cannot register
            return false;
        }
}
    function emptyInputLogin($username, $password){
        if(empty($username) || empty($password)){
            return true;
        }
        else{
            return false;
        }
}

    function loginUser($conn, $username, $password){
        $userExists = userExists($conn, $username);
        if(!$userExists){
            header("location:../login.php?error=incorrectLogin");
            exit();
        }

        $hashedPassword = $userExists["password"];
        $checkPassword = password_verify($password, $hashedPassword);

        if(!$checkPassword){
            header("location:../login.php?error=incorrectLogin");
            exit();
        }
        else{
            session_start();
            $_SESSION["username"] = $username;

            header("location:../profile.php");
            exit();
        }
}

    function updateUser($conn, $username, $firstName, $lastName, $emailAddress){
        $sql = "UPDATE users SET firstName = ?, lastName = ?, emailAddress = ? WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../profile.php?error=updateFailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $emailAddress, $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../profile.php?error=none");
}

    function deleteUser($conn, $username){
        $sql = "DELETE FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../profile.php?error=deleteFailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        include 'logout-inc.php';
        header("location: ../registration.php?error=none");
}

$data = loadUsers($conn);

function loadProducts($conn) {
    $sql = "SELECT * FROM bdProducts";
    $stmt = mysqli_stmt_init($conn);
    while($result = mysqli_fetch_assoc($data)) {
        $productName = $result["productName"];
        $productPrice = $result["productPrice"];
        $productServing = $result["productServing"];
        $productPrepTime = $result["productPrepTime"];
        $productCookTime = $result["productCookTime"];
        $description = $result["description"];

    }
}

// SQL query to select data from database
function loadProduct($conn, $id) {
    $sql = "SELECT * FROM bdProducts WHERE productId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../productDetails.php?id=".$id);
            exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);

    if($row = mysqli_fetch_assoc($result)) {
        return $row;
    }
    else {
        
        return false;
    }
}
?>