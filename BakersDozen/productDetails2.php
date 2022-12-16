<?php
    $title = "Baker's Dozen | Utensils Shop";
    include 'Includes/header.php';
?>

<h1 class="pb-3 bakingPackageText">BAKING PACKAGES</h1>
    <div class="container p-5">
        <div class="row">
            <div class="card mb-3 border-0" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../Images/Whisk.jpg" class="img-fluid rounded-start " alt="..."><br><br>
                        <input type="number" min="1" class="quantityInput" placeholder="QTY">
                        <a href="#" class="btn shopNow">ADD TO CART</a>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Balloon Whisk</h2>
                            <p class="card-text price">€7.95</p>
                            <p class="desc">Material |<b> Stainless Steel</b></p>                     
                            <p class="desc">Dimentions |<b> 130 x 28 x 18cm</b></p>                     
                            <p class="desc">Dishwasher Safe |<b> Yes</b></p>
                            <p class="desc">This standard hand whisk manual is a great addition to your kitchen tool set, helping create any home made dishes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <h1 class="pb-3 bakingPackageText">OTHER RECOMMENDED UTENSILS</h1>
    <div class="container p-5">
        <div class="row">
            <div class="col-sm p-3">
                <a href="productDetails.html" class="bakingCardContent">
                    <div class="card border-0">
                        <img class="card-img-top cardImageStyling" src="../Images/Whisk.jpg">
                        <a href="../HTML/#.html"  class="btn shopNowBaking"><img src="../Images/plus.svg" class="plusBaking"
                                alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">Balloon Whisk</h5>
                            <p class="card-text price">€7.95</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm p-3">
                <a href="productDetails.html" class="bakingCardContent">
                    <div class="card border-0">
                        <img class="card-img-top cardImageStyling" src="../Images/Whisk.jpg">
                        <a href="../HTML/#.html"  class="btn shopNowBaking"><img src="../Images/plus.svg" class="plusBaking"
                                alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">Balloon Whisk</h5>
                            <p class="card-text price">€7.95</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm p-3">
                <a href="productDetails.html" class="bakingCardContent">
                    <div class="card border-0">
                        <img class="card-img-top cardImageStyling" src="../Images/Whisk.jpg">
                        <a href="../HTML/#.html"  class="btn shopNowBaking"><img src="../Images/plus.svg" class="plusBaking"
                                alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">Balloon Whisk</h5>
                            <p class="card-text price">€7.95</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>