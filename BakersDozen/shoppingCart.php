<?php
    $title = "Baker's Dozen | Checkout";
    include 'Includes/header.php';
?>

<h1 class="pb-3 bakingPackageText">Shopping Cart</h1>
        <div class="col-sm-8 col-lg-10 mx-auto">
            <div class="col-sm p-3 ">
                <div class="card border-0 shadow p-1 mb-5 bg-white rounded">
                    <div class="card-body">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-lg-4 col-sm-4">
                                    <img src="../Images/cupcake.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-lg-8 col-sm-8">
                                    <div class="card-body cardBody">
                                        <p class="card-title pb-1">Double Chocolate Chip Muffin Package</p>
                                        <p class="card-text cartAccent">€25</p>
                                        <input type="number" min="1" class="quantityInput" placeholder="QTY">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>