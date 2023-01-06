<?php
    $title = "Baker's Dozen | Baking Kit";
    include 'Includes/header.php';
    include 'Includes/dbh-inc.php';
    include 'Includes/functions-inc.php';
?>

<h1 class="pb-3 bakingPackageText">BAKING PACKAGES</h1>
    <div class="container p-5">
        <div class="row">
            <div class="card mb-3 border-0" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../Images/cupcake.jpg" class="img-fluid rounded-start " alt="..."><br><br>
                        <a href="#" class="btn shopNow">ADD TO CART</a>
                    </div>
                    
                    <?php
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        $result = loadProduct($conn, $id);
?>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $result['productName'];?></h2>
                                    <p class="card-text price">€<?php echo $result['productPrice'];?></p>
                                    <p class="desc">Servings |<b> <?php echo $result['productServing'];?> People</b></p>
                                    <p class="desc">Preparation Time |<b> <?php echo $result['productPrepTime'];?> mins</b></p>
                                    <p class="desc">Cook Time |<b> <?php echo $result['productCookTime'];?> mins</b></p>
                                    <p class="desc"><?php echo $result['description'];?></p>
                                </div>
                            </div>
<?php
                    }

                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <h1 class="pb-3 bakingPackageText">OTHER DESSERTS YOU MAY LIKE</h1>
    <div class="container p-5">
        <div class="row">
            <div class="col-sm p-3">
                <a href="productDetails.html" class="bakingCardContent">
                    <div class="card border-0">
                        <img class="card-img-top cardImageStyling" src="../Images/cupcake.jpg">
                        <a href="../HTML/#.html" class="btn shopNowBaking"><img src="../Images/plus.svg"
                                class="plusBaking" alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">Double Chocolate Chip Muffin Package</h5>
                            <p class="card-text price">€25</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm p-3">
                <a href="productDetails.html" class="bakingCardContent">
                    <div class="card border-0">
                        <img class="card-img-top cardImageStyling" src="../Images/cupcake.jpg">
                        <a href="../HTML/#.html" class="btn shopNowBaking"><img src="../Images/plus.svg"
                                class="plusBaking" alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">Double Chocolate Chip Muffin Package</h5>
                            <p class="card-text price">€25</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm p-3">
                <a href="productDetails.html" class="bakingCardContent">
                    <div class="card border-0">
                        <img class="card-img-top cardImageStyling" src="../Images/cupcake.jpg">
                        <a href="../HTML/#.html" class="btn shopNowBaking"><img src="../Images/plus.svg"
                                class="plusBaking" alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">Double Chocolate Chip Muffin Package</h5>
                            <p class="card-text price">€25</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>