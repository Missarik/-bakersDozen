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

<?php

if (isset($_POST['post_comment'])){

    $name = $_POST['name'];
    $message = $_POST['message'];
    $productId = 1;
    

// INCLUDE THIS CODE INSTEAD OF Line 41 once products are connected to database // 
    
    // if (isset($_GET["productId"])){
    //     $productId = $_GET["productId"];
    // }
    // else{
    //     // redirect back to product list (header link url)
        
    // }

    $sql = "INSERT INTO bdComments (name, message, productId)
    VALUES (?,?,?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Comment could not be posted";
        exit();
    }
    
    mysqli_stmt_bind_param($stmt,'sss', $name, $message, $productId);

    mysqli_stmt_execute($stmt);
    echo mysqli_error($conn);
    mysqli_stmt_close($stmt);
    
    echo "Comment saved successfully";    
}

?>
<!-- Comment Section -->

<h1 class="pb-3 bakingPackageText">COMMENTS</h1>

<div class="col-lg-5 col-sm-11 mx-auto p-3 card border-0 shadow p-3 mb-5 bg-white rounded">
    <form action="productDetails.php" method="post" class="form">
        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        <br>
        <textarea name="message" id="message" class="message" cols="30" rows="10" placeholder="Message"></textarea>
        <br>
        <button type="submit" class="btn" name="post_comment">Post Comment</button>
    </form>
</div>

<div class="content">
<?php 

$sql = "SELECT * FROM dbComments"; 

$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    // error 
}

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

mysqli_stmt_close($stmt);






// $result = $conn->query($sql);

// if($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)){
?>
<h3><?php echo $row['name'];?></h3>
<p><?php echo $row['message'];?></p>


<?php }  ?>

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



<div class="content">

    <?php

        $sql = "SELECT * from bakersDozen";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            // echo "id: " . $row["id"] . "- Name" . $row['']
        }
    }
        

    ?>


    <h3> <?php echo $row['name'] ?> </h3>
    <p> <?php echo $row['message'] ?> </p>
</div>

<?php
    include 'Includes/footer.php';
?>