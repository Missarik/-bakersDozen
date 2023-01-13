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
                    
                    
                    <?php
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        $result = loadProduct($conn, $id);
                        
                        $productType = $result['productType'];
?>

                    <div class="col-md-4">
                        <img src="Images/products/<?php echo $result['image']; ?>" class="card-img-top cardImageStyling" alt="Showcase Image"><br><br>
                        <a href="#" class="btn shopNow">ADD TO CART</a>
                    </div>

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

                    <?php 
                        $data = getRandomProduct($conn, $productType);
                    ?>

    <h1 class="pb-3 bakingPackageText">OTHER DESSERTS YOU MAY LIKE</h1>
    <div class="container p-5">
        <div class="row">
            <?php $counter = 0;
        while($result = mysqli_fetch_assoc($data)) {

            
            $productId = $result["productId"];
            $productName = $result["productName"];
            $productPrice = $result["productPrice"];
            $image = $result["image"];




            ?>
            <div class="col-sm p-3">
                <a href="productDetails.php?id=<?php echo $productId; ?>" class="bakingCardContent">
                    <div class="card border-0">
                        <img src="Images/products/<?php echo $image; ?>" class="card-img-top cardImageStyling">
                        <a href="../HTML/#.html" class="btn shopNowBaking"><img src="../Images/plus.svg"
                                class="plusBaking" alt=""></a>
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $productName;?></h5>
                            <p class="card-text price">€<?php echo $productPrice;?></p>
                        </div>
                    </div>
                </a>
            </div>

            <?php
            $counter++;
            if($counter == 3){
?>
    </div>
    <div class="row">
<?php
                $counter = 0;
            }
        }
    ?>

        </div>
    </div>
        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>