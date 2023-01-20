<?php
    $title = "Baker's Dozen | Baking Kit";
    include 'Includes/header.php';
    include 'Includes/dbh-inc.php';

?>

<?php

    // if(isset($_POST['post_comment'])) {
    //     $name = $_POST['name'];
    //     $message = $_POST['message'];

    //     $sql = "INSERT INTO bdComments (name, message)
    //     VALUES('$name', '$message')";

    //     if ($conn->query($sql) === TRUE) {
    //         echo "Comment posted successfully";
    //     } else { 
    //         echo "Error: " .$sql . "<br>" . $conn->error; 
    //     }
    // }

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