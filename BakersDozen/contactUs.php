<?php
$title = "Baker's Dzoen | Contact Us";
    include 'Includes/header.php';
?>

<h1 class="pb-5 bakingPackageText">WANT TO GET IN TOUCH?</h1>
    <div>
        <img src="../Images/contactUsImage.jpg" class="subImageStyling" alt="">
        <h2 class="subscribeIMGText">TALK TO US ABOUT ANY OF YOUR QUERIES, WERE ALWAYS THERE TO HELP.</h2>
        <h2 class="subscribeIMGText2">YOU CAN CONTACT US BY FILLING IN THE FORM BELOW. IF YOU NEED YOU CAN ALSO ADD A
            COMPLAINT IF YOU DEEM FIT. WE WILL SETTLE OUT ANY ISSUES. WE WONT LET OUR FELLOW BAKERS DOWN.</h2>
    </div>


    <div class="container-fluid subCardContainer p-5 ">
        <div class="row">


            <div class="col-sm-6 p-3">
                <div class="card border-0 shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title subCardTitle">CONTACT US</h5>
                        <form>
                            <div>
                                <div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="pb-4">
                                    <label for="exampleInputEmail1" class="form-label">Message</label><br>
                                    <textarea name="" id="" cols="92" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <a href="../HTML/mysterybox.html" type="submit" class="btn shopNow">Submit Message</a>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-sm-4 p-3">
                <div class="card border-0 shadow p-3 mb-5 bg-white rounded ">
                    <div class="card-body">
                        <h5 class="card-title subCardTitle">DISPUTE</h5>
                        <form>
                            <div>
                                <div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="pb-4">
                                    <label for="exampleInputEmail1" class="form-label">Complaint</label><br>
                                    <textarea name="" id="" cols="92" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <a href="../HTML/mysterybox.html" type="submit" class="btn shopNow">Submit Complaint</a>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>