<?php
    $title = "Baker's Dzoen | Login";
    include 'Includes/header.php';
?>

<div class="container-fluid flexBox">
        <div class="col-6 col-lg-6">
            <img src="../Images/Baker.jpg" class="loginImageStyling" alt="">
        </div>
        <div class="col-6 col-lg-6 loginForm">
            <img src="../Images/Logo.png" class="loginLogoStyling pb-5" alt="">
            <div class="form-container-fluid loginFormStyling">
                <form action="../HTML/index.html" class="formHeight">
                    <div class="mb-3 pb-4" class="formInputPadding">
                        <input type="email" class="formInput" id="exampleInputEmail1" required placeholder="Email Address" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 pb-4">
                        <input type="password" class="formInput" placeholder="Password" required id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check pb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                    </div>
                    <div class="pb-5">
                    <p>Don't have an account? <span><a href="signup.php" class="signUpHere">Sign up here!</a></span></p>
                    </div>
                    <button type="submit" class="btn btn-BC4C35 loginButton">Login</button>
                </form>
            </div>
            
        </div>
    </div>
</body>

</html>