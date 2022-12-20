<?php
$title = "Baker's Dozen | Shopping Cart";
include 'Includes/header.php';
?>

<h1 class="pb-3 bakingPackageText">Shopping Cart</h1>
<div class="col-sm-8 col-lg-10 mx-auto">
    <div class="col-sm p-3 ">
        <hr>
        <div class="card outlineCard border-0 p-1 mb-5 bg-white">
            <div class="card-body">
                <div class="card mb-3 border-0" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-lg-2 col-sm-2">
                            <img src="../Images/cupcake.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-10 col-sm-10">
                            <div class="card-body cardBody">
                                <p class="card-title pb-1">Double Chocolate Chip Muffin Package</p>
                                <p class="card-text cartAccent">€25</p>
                                <input type="number" min="1" class="quantityInput" placeholder="QTY">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<a href="#" class="btn shopNow">ADD TO CART</a>


<?php
include 'Includes/footer.php';
?>