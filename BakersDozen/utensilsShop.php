<?php
$title = "Baker's Dozen | Baking Kit";
    include 'Includes/header.php';
    include 'Includes/dbh-inc.php';
    include 'Includes/functions-inc.php';
?>

<h1 class="pb-3 bakingPackageText">BAKING PACKAGES</h1>
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

            $productName = $result["ProductName"];
            $productPrice = $result["ProductPrice"];
            $material = $result["Material"];
            $image = $result["Image"];
            
            ?>

<div class="col-sm p-3 item">
                <a href="productDetails2.php" class="bakingCardContent">
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


<?php
    include 'Includes/footer.php';
?>