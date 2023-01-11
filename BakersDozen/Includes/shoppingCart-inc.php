<?php

    if(isset($_POST["addToWishlist"])) {
        $productId = $_POST["productId"];



        require_once "dbh-inc.php";
        require_once "functions-inc.php";

        addWishlist($conn, $productId);
    }

?>