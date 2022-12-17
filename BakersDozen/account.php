<?php
    $title = "Baker's Dozen | Account";
    include 'Includes/header.php';
?>

<h1 class="subText pb-5">MY ACCOUNT</h1>
    <div>
        <img src="../Images/accountHeader.jpg" class="subImageStyling" alt="">
    </div>
    <div class="pt-5 container-fluid flexBox justify-content-center p-5">
        <div class="col-lg-5 col-sm-11 p-5 card">
            <img src="../Images/person.svg" class="profileUser" alt="">
        </div>
        <div class="col-lg-5 col-sm-11 p-5 card accountDetails-card">
            <div class="flexBox nameSurname">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control inputWidth" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Surname</label>
                    <input type="text" class="form-control inputWidth" id="exampleInputPassword1">
                </div>
            </div>
            <div class="flexBox">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="flexBox">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bio</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
            </div>
            <a href="../HTML/mysterybox.html" class="btn shopNow">Update Details</a>
        </div>
    </div>

<?php
    include 'Includes/footer.php';
?>