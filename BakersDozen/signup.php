<?php
    $title = "Baker's Dzoen | Signup";
    include 'Includes/fixedHeader.php';
?>

<div class="container-fluid flexBox">
        <div class="col-6 col-lg-6 signupForm">
            <div class="form-container-fluid loginFormStyling">
            <h1 class="pb-4">Sign Up</h1>
                <form action="Includes/signup-inc.php" class="formHeight" method="POST">

                    <div class="pt-5 signupFlex">
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="name" required placeholder="Name">
                        </div>
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="surname" required placeholder="Surname">
                        </div>
                    </div>

                    <div class="signupFlex">
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="mobNumber" required placeholder="Mobile Number">
                        </div>
                        <div class="mb-3 pb-4" class="formInputPadding">
                            <input type="text" class="formInput form-control sharedInput" id="exampleInputEmail1" name="nationality" required placeholder="Nationality">
                        </div>
                    </div>

                    <div class="mb-3 pb-4" class="formInputPadding">
                        <input type="date" class="formInput form-control sharedInput" id="exampleInputEmail1" name="dob" required placeholder="Date of Birth">
                    </div>
                    <div class="mb-3 pb-4" class="formInputPadding">
                        <input type="email" class="formInput form-control sharedInput" id="exampleInputEmail1" name="email" required placeholder="Email Address">
                    </div>
                    <div class="mb-3 pb-4">
                        <input type="password" class="formInput form-control sharedInput" placeholder="Password" name="password" required id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 pb-4">
                        <input type="password" class="formInput form-control sharedInput" name="confirmPassword" placeholder="Confirm Password" required id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-BC4C35 signUpButton" id="submit">Sign Up</button>
                </form>
            </div>
        </div>
        <div class="col-6 col-lg-6">
            <img src="../Images/signupbaker.jpg" class="signinImageStyling" alt="">
        </div>
    </div>
</body>

</html>