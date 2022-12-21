<?php
    $title = "Baker's Dozen | Mystery Box";
    include 'Includes/header.php';
?>

<h1 class="pb-5 subText">WHY SUBSCRIBE TO THE MYSTERY BOX?</h1>

    <div class="subIMG">
        <h2 class="subscribeIMGText">ENROLL YOURSELF INTO THE WONDER COMMUNITY OF BAKING</h2>
        <h2 class="subscribeIMGText2">GET THESE BOXES AND SURPRISE YOURSELF WITH WHATEVER RECIPE YOU MAY FIND. BETTER
            YOUR SKILLS AND BECOME THE BEST BAKER YOU CAN.</h2>
    </div>

    <h1 class="pt-5 subText">HOW DO I SUBSCRIBE TO THE MYSTERY BOX?</h1>


    <div class="container subCardContainer p-5">
        <div class="row">
            <div class="col-lg-4 col-sm-12 p-3">
                <div id="card" class="card border-0 shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title subCardTitle">STARTER</h5>
                        <p class="card-text subPrice">€25</p>
                        <p class="card-text pb-3 subPrice2">/Monthly</p>
                        <p class="card-text subCardContent">2 different recipes</p>
                        <p class="card-text p-3 subCardContent">Easy difficulty</p>
                        <p class="card-text subCardContent">Serves up to 3 people</p>
                        <a href="shoppingCart.html" class="btn subButton">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 p-3">
                <div id="card" class="card border-0 shadow p-3 mb-5 bg-white rounded ">
                    <div class="card-body">
                        <h5 class="card-title subCardTitle">INTERMEDIATE</h5>
                        <p class="card-text subPrice">€35</p>
                        <p class="card-text pb-3 subPrice2">/Monthly</p>
                        <p class="card-text subCardContent">3 different recipes</p>
                        <p class="card-text p-3 subCardContent">Moderate difficulty</p>
                        <p class="card-text subCardContent">Serves up to 5 people</p>
                        <a href="shoppingCart.html" class="btn subButton">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 p-3">
                <div id="card" class="card border-0 shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title subCardTitle">ADVANCED</h5>
                        <p class="card-text subPrice">€45</p>
                        <p class="card-text pb-3 subPrice2">/Monthly</p>
                        <p class="card-text subCardContent">4 different recipes</p>
                        <p class="card-text p-3 subCardContent">Hard difficulty</p>
                        <p class="card-text subCardContent">Serves up to 10 people</p>
                        <a href="shoppingCart.html" class="btn subButton">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h1 class="pb-5 subText">WHAT'S IN THE BOX?</h1>

    <div class="sm-cards-showcase pt-2 pb-5">
        <div class="flexBox">
            <div class="col-lg-3  col-sm-12">
                <div id="card" class="card cardSize text-center mx-auto card-bg-white border-0">
                    <img src="../Images/Recipe.svg" class="card-img-top cardImageStyling" alt="Subscription Box">
                    <div class="card-body">
                        <h5 class="card-title text-dark">RECIPE</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div id="card" class="card cardSize text-center mx-auto card-bg-white border-0">
                    <img src="../Images/Ingredients.svg" class="card-img-top cardImageStyling" alt="Baking Packages">
                    <div class="card-body">
                        <h5 class="card-title text-dark">INGREDIENTS</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div id="card" class="card cardSize text-center mx-auto card-bg-white border-0">
                    <img src="../Images/Freebie.svg" class="card-img-top cardImageStyling" alt="Baking Utensils">
                    <div class="card-body">
                        <h5 class="card-title text-dark">FREEBIES</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div id="card" class="card cardSize text-center mx-auto card-bg-white border-0">
                    <img src="../Images/Sticker.svg" class="card-img-top cardImageStyling" alt="Baking Utensils">
                    <div class="card-body">
                        <h5 class="card-title text-dark">STICKERS</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>