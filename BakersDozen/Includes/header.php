<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="../Images/icon.svg">
    <title><?php echo $title ?></title>

    <!--Bootstrap Links--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    <!--Our Main CSS-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/account.css">
    <link rel="stylesheet" href="../CSS/bakingKit.css">
    <link rel="stylesheet" href="../CSS/cart.css">
    <link rel="stylesheet" href="../CSS/contactUs.css">
    <link rel="stylesheet" href="../CSS/subscribe.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/sitemap.css">
    <link rel="stylesheet" href="../CSS/productDetails.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg opacity-100 shadow p-3 mb-5 bg-white rounded">
        <div class="container-fluid">
            <a href="index.php"><img src="../Images/Logo.png" alt="Logo" width="150" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="../Images/Logo.png" alt="Logo" width="150" class="d-inline-block align-text-top">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
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
                            <a class="nav-link" href="account.php">
                                <ion-icon size="large" name="person"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shoppingCart.php">
                                <ion-icon size="large" name="cart"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-BC4C35 nav-login-btn" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>