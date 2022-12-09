<?php
    $title = "Baker's Dzoen | Baking Kit";
    include 'Includes/header.php';
?>

<h1 class="pb-3 bakingPackageText">BAKING PACKAGES</h1>
    <div class="container p-5">
        <div class="row">
            <div class="card mb-3 border-0" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../Images/cupcake.jpg" class="img-fluid rounded-start " alt="..."><br><br>
                        <input type="number" min="1" class="quantityInput" placeholder="QTY">
                        <a href="#" class="btn shopNow">ADD TO CART</a>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Double Chocolate Chip Muffin Package</h2>
                            <p class="card-text price">€25</p>
                            <p class="desc">Servings |<b> 4 people</b></p>
                            <p class="desc">Preparation Time |<b> 15 mins</b></p>
                            <p class="desc">Cook Time |<b> 20 mins</b></p>
                            <p class="desc">The classic chocolate cupcake that cannot get any simpler than this. Dark
                                chocolate topped with chocolate chips.</p>
                            <p class="desc">Comes with 18 oven-safe cupcake cups.</p>
                        </div>
                    </div>
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