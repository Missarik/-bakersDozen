<?php
    $title = "Baker's Dozen | Checkout";
    include 'Includes/header.php';
?>

<h1 class="pb-3 bakingPackageText">Shopping Cart</h1>
    <div class="container-fluid flexBox">
        <div class="col-sm-7 col-lg-7">
            <div class="col-sm p-3">
                <div class="card border-0 shadow p-3 mb-5 bg-white rounded ">
                    <div class="card-body" style="height: 1000px;">
                        <h5 class="card-title subCardTitle pb-5">DELIVERY ADDRESS</h5>
                        <form action="">
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="First Name" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="Last Name" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="Mobile Number" required id="exampleInputPassword1">
                            </div>
    
                            <div class="mb-3 pt-4 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="Address Line 1" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="Address Line 2 (Optional)" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="City" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="County (Optional)" required id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="Country" required id="exampleInputPassword1">
                            </div>
    
                            <h5 class="card-title subCardTitle pt-5 pb-5">PROMOTIONAL CODES AND DISCOUNTS</h5>
                            <div class="mb-3 pb-4" style="text-align: center;">
                                <input type="text" class="deliveryInput" name="" placeholder="Code" required id="exampleInputPassword1">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-BC4C35 deliverButton ">DELIVER</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-lg-5">
            <div class="col-sm p-3 ">
                <div class="card border-0 shadow p-1 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title subCardTitle pb-5">CART</h5>
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../Images/cupcake.jpg" class="img-fluid rounded-start " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body pt-3">
                                        <p class="card-title pb-1">Double Chocolate Chip Muffin Package</p>
                                        <p class="card-text cartAccent">€25</p>
                                        <p class="card-text cartAccent">Quantity: 1</p>
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