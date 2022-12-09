<?php
    $title = "Baker's Dzoen | Signup";
    include 'Includes/header.php';
?>

<div class="container-fluid flexBox">
        <div class="col-6 col-lg-6 signupForm">
            <img src="../Images/Logo.png" class="loginLogoStyling pb-5" alt="">
            <div class="form-container-fluid loginFormStyling">
                <form action="../HTML/index.html" class="formHeight">
                    <div class="pt-5 signupFlex">
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput sharedInput" id="exampleInputEmail1" required placeholder="Name">
                        </div>
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput sharedInput" id="exampleInputEmail1" required placeholder="Surname">
                        </div>
                    </div>
                    <div class="signupFlex">
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput sharedInput" id="exampleInputEmail1" required placeholder="Date of Birth">
                        </div>
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput sharedInput" id="exampleInputEmail1" required placeholder="Nationality">
                        </div>
                    </div>
                    <div class="mb-3 pb-4" class="formInputPadding">
                        <input type="email" class="formInput sharedInput" id="exampleInputEmail1" required placeholder="Email Address">
                    </div>
                    <div class="mb-3 pb-4">
                        <input type="password" class="formInput sharedInput" placeholder="Password" required id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 pb-4">
                        <input type="password" class="formInput sharedInput" placeholder="Confirm Password" required id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check pb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                    </div>
                    <button type="submit" class="btn btn-BC4C35 signUpButton">Sign Up</button>
                </form>
            </div>
        </div>
        <div class="col-6 col-lg-6">
            <img src="../Images/signupbaker.jpg" class="signinImageStyling" alt="">
        </div>
    </div>
</body>

</html>