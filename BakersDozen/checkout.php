<?php
$title = "Baker's Dozen | Checkout";
include 'Includes/header.php';
?>

<h1 class="pb-3 pl-3 bakingPackageText">CHECKOUT </h1>
<div class="container-fluid mx-auto  p-5">
    <div class="row flexbox justify-content-center align-content-center">
        <div class="col-lg-6 p-1 ">
            <h1 class="pb-4">Shipping Details</h1>
            <form action="Includes/signup-inc.php" class="formHeight" method="POST">
                <div class="mb-3 pb-4" class="formInputPadding">
                    <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="firstLastName" required placeholder="First and Last Name">
                </div>
                <div class="mb-3 pb-4" class="formInputPadding">
                    <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="companyName" placeholder="Company Name (Optional)">
                </div>
                <div class="mb-3 pb-4" class="formInputPadding">
                    <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" required name="address" placeholder="Address">
                </div>
                <div class="mb-3 pb-4" class="formInputPadding">
                    <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="address2" placeholder="House No, Suite, etc... (Optional)">
                </div>
                <div class="mb-3 pb-4" class="formInputPadding">
                    <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="city" required placeholder="City">
                </div>
                <div class="dropdown mb-3 pb-4">
                    <button class="btn formInput form-control countries sharedInput dropdown-toggle" type="button" data-bs-toggle="dropdown" style="text-align: left;" aria-expanded="false">
                        Countries
                    </button>
                    <ul class="dropdown-menu">
                    </ul>
                </div>
                <select class="selectpicker countrypicker" data-live-search="true" data-flag="true"></select>
                <div class="mb-3 pb-4" class="formInputPadding">
                    <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="phone"  placeholder="Phone (Optional)">
                </div>
                <button type="submit" name="submit" class="btn btn-BC4C35 signUpButton" id="submit">Sign Up</button>
            </form>
        </div>
        <div class="col-lg-4 p-1 item">
            <div id="cartCard" class="card border-0">
                <div class="card-body">
                    <div class="chkBTN p-3">
                        <a id="checkoutLink" href="">
                            <h5 class="card-title">
                                <h3 class="chkBTNText">YOUR BAG <i class="bi bi-arrow-down"></i></h3>
                            </h5>
                        </a>
                    </div>
                    <p class="card-text p-3" style="text-align: center;">By placing your order, you are agreeing with the <a href="#">Delivery Terms</a></p>
                    <h5>Order Summary: </h5>
                    <div class="orderSummary">
                        <p class="p-3"><span class="productAmmount">1</span> PRODUCT</p>
                        <hr style="width: 90%;">
                        <p class="p-3">PRODUCT PRICE: €<span class="productPrice">25</span></p>
                        <hr style="width: 90%;">
                        <p class="p-3">DELIVERY FEE: FREE</p>
                        <hr style="width: 90%;">
                        <p class="p-3"><b>TOTAL: €<span class="totalPrice">25</span></b></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="payMethod">
                <h3 class="pb-3">Accepted Payment Methods</h3>
                <div class="flexBox payMethod iconAlign">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-apple-pay"></i>
                    <i class="fa-brands fa-google-pay"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'Includes/footer.php';
?>