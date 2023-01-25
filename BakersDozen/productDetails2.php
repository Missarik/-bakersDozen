<?php
    $title = "Baker's Dozen | Utensils Shop";
    include 'Includes/header.php';
    include 'Includes/dbh-inc.php';
    include 'Includes/functions-inc.php';
?>

<h1 class="pb-3 bakingPackageText">UTENSILS SHOP</h1>
    <div class="container p-5">
        <div class="row">
            <div class="card mb-3 border-0" style="max-width: 100%;">
                <div class="row g-0">
                    
                    
                    <?php
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                            $result = loadUtensil($conn, $id);

                            $productType = $result['productType'];
?>

                    <div class="col-md-4">
                        <img src="Images/utensils/<?php echo $result["Image"]; ?>" class="card-img-top cardImageStyling" alt="Showcase Image"><br><br>
                        <a href="#" class="btn shopNow">ADD TO CART</a>
                    </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $result['ProductName'];?></h2>
                                    <p class="card-text price">€<?php echo $result['ProductPrice'];?></p>
                                    <p class="desc">Material |<b> <?php echo $result['Material'];?></b></p>
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
                        $data = getRandomUtensil($conn, $productType);
                    ?>

    <h1 class="pb-3 bakingPackageText">SIMILAR PRODUCTS</h1>
    <div class="container p-5">
        <div class="row">
            <?php $counter = 0;
        while($result = mysqli_fetch_assoc($data)) {

            
            $productId = $result["ProductId"];
            $productName = $result["ProductName"];
            $productPrice = $result["ProductPrice"];
            $image = $result["Image"];




            ?>
            <div class="col-sm p-3">
                <a href="productDetails2.php?id=<?php echo $productId; ?>" class="bakingCardContent">
                    <div class="card border-0">
                        <img src="Images/utensils/<?php echo $image; ?>" class="card-img-top cardImageStyling">
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

    <h1 class="pb-3 pt-5 bakingPackageText">COMMENTS</h1>

<div class="col-lg-5 col-sm-11 mx-auto p-3 card border-0 shadow p-3 mb-5 bg-white rounded">
    <form action="productDetails.php" method="post" class="form">
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
        <br>
        <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
        <br>
        <button class="btn submitBtn" type="submit" name="post_comment">Post Comment</button>
    </form>
</div>

<div class="col-lg-5 col-sm-11 mx-auto p-3">
<?php 

    $comments = loadComments($conn);


    while($row = mysqli_fetch_assoc($comments)){
?>
    <div class="postedComments form-control card border-2 mb-5 bg-white rounded">
        <h6><?php echo $row['name'];?></h6>
        <p class='message'><?php  echo $row['message'];?></p>
    </div>

<?php }  ?>

</div>

<!-- Comment Section End -->

<?php
    include 'Includes/footer.php';
?>