<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="../Images/icon.svg">
    <title><?php echo $title ?></title>

    <!--Bootstrap Links--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Our Main CSS-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/account.css">
    <link rel="stylesheet" href="../CSS/bakingKit.css">
    <link rel="stylesheet" href="../CSS/cart.css">
    <link rel="stylesheet" href="../CSS/contactUs.css">
    <link rel="stylesheet" href="../CSS/subscribe.css">
    <link rel="stylesheet" href="../CSS/footer.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg nav-bg-white opacity-100 shadow p-3 mb-5 bg-white rounded">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="../Images/Logo.png" alt="Logo" width="150" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto" id="middleNAV">
                    <li class="nav-item">
                        <a class="nav-link" href="mysteryBox.php">MYSTERY BOX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bakingKit.php">BAKING PACKAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="utensilsShop.php">UTENSILS SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">CONTACT US</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="account.php"><i class="fa-solid fa-user fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shoppingCart.php"><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-BC4C35 nav-login-btn" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>