<?php
$title = "Baker's Dozen | Baking Kit";
    include 'Includes/header.php';
    include 'Includes/dbh-inc.php';
    include 'Includes/functions-inc.php';
?>

<h1 class="pb-3 bakingPackageText">UTENSILS SHOP</h1>
    <div>
        <input type="search" class="form-control" style="width: 35%; margin: auto; display: block; text-align: center;" id="search-item"  placeholder="Search Packages &#x1F50E;&#xFE0E;" onkeyup="search();">
    </div>

    <?php
        $data = loadUtensils($conn);
?>
    <div class="container p-5">
        <div class="row">
<?php
$counter = 0;
        while($result = mysqli_fetch_assoc($data)) {

            $productId = $result["ProductId"];
            $productName = $result["ProductName"];
            $productPrice = $result["ProductPrice"];
            $material = $result["Material"];
            $image = $result["Image"];
            
            ?>

<div class="col-sm p-3 item">
<a href="productDetails2.php?id=<?php echo $productId; ?>" class="bakingCardContent">
                    <div class="card border-0">
                        <img src="Images/utensils/<?php echo $image; ?>" class="card-img-top cardImageStyling">
                        <a href="../HTML/#.html"  class="btn shopNowBaking"><img src="../Images/plus.svg" class="plusBaking"
                                alt=""></a>
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


<!-- Recommended Products -->

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

<!-- Comment Section - Kaia -->

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