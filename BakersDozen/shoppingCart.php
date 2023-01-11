<?php
$title = "Baker's Dozen | Shopping Cart";
include 'Includes/header.php';
?>

<h1 class="pb-3 pl-3 bakingPackageText">MY BASKET</h1>
<div class="container-fluid mx-auto  p-5">
    <div class="row flexbox justify-content-center align-content-center">
        <div class="col-lg-6 p-1 ">
            <div class="card mb-3 border-0 cartItemCard" style="max-width: 100%;">
                <div class="row g-0">
                    <!--Card-->
                    <?php
                    if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $result = loadProduct($conn, $id);
                    ?>

                        <div class="col-md-4">
                            <img src="Images/products/<?php echo $result["image"]; ?>" class="card-img-top cardImageStyling" alt="Showcase Image"><br><br>
                            <a href="#" class="btn shopNow">ADD TO CART</a>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $result['productName']; ?></h2>
                                <p class="card-text price">€<?php echo $result['productPrice']; ?></p>
                                <p class="desc">Servings |<b> <?php echo $result['productServing']; ?> People</b></p>
                                <p class="desc">Preparation Time |<b> <?php echo $result['productPrepTime']; ?> mins</b></p>
                                <p class="desc">Cook Time |<b> <?php echo $result['productCookTime']; ?> mins</b></p>
                                <p class="desc"><?php echo $result['description']; ?></p>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                    <div class="col-md-2 pt-4 wrapper">
                        <span class="minus"><i class="bi bi-dash"></i></span>
                        <span class="num">01</span>
                        <span class="plus"><i class="bi bi-plus"></i></span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 p-1 item">
            <div id="cartCard" class="card border-0">
                <div class="card-body">
                    <div class="chkBTN p-3">
                        <a id="checkoutLink" href="checkout.php">
                            <h5 class="card-title">
                                <h3 class="chkBTNText">CHECKOUT <i class="bi bi-arrow-right"></i></h3>
                            </h5>
                        </a>
                    </div>
                    <p class="card-text p-3" style="text-align: center;">By placing your order, you are agreeing with the <a href="#">Delivery Terms</a></p>
                    <h5>Order Summary: </h5>
                    <div class="orderSummary">
                        <p class="p-3"><span class="productAmmount">1</span> PRODUCT</p>
                        <hr style="width: 90%;">
                        <p class="p-3">PRODUCT PRICE: €<span class="productPrice">25</span></p>
                        <hr style="width: 90%;">
                        <p class="p-3">DELIVERY FEE: FREE</p>
                        <hr style="width: 90%;">
                        <p class="p-3"><b>TOTAL: €<span class="totalPrice">25</span></b></p>
                    </div>
                </div>
            </div>
            <br>
            <div id="cartCard" class="card border-0">
                <div class="card-body">
                    <div class="chkBTN p-3">
                        <a id="checkoutLink" href="">
                            <h5 class="card-title">
                                <h3 class="chkBTNText">Promo Code <i class="bi bi-arrow-bar-down"></i></h3>
                            </h5>
                        </a>
                    </div>
                    <div class="pt-3">
                        <input type="text" class="form-control" placeholder="INSERT PROMOCODE" aria-label="Promocode" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <br>
            <div class="payMethod">
                <h3 class="pb-3">Accepted Payment Methods</h3>
                <div class="flexBox payMethod iconAlign">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-apple-pay"></i>
                    <i class="fa-brands fa-google-pay"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'Includes/footer.php';
?>