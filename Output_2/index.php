<?php

$pageTitle = "Home - PHP Output #2";

include "includes/header.php";

?>

<section class="hero">

    <div class="hero-content">

        <p class="welcome">
            WELCOME TO
        </p>

        <h1>
            PHP Output #2
        </h1>

        <p>
            A simple PHP website with registration,
            login, and password recovery pages.
        </p>

        <div class="hero-buttons">

            <a href="register.php" class="btn">
                Create Account
            </a>

            <a href="login.php" class="btn secondary">
                Login
            </a>

        </div>

    </div>

</section>


<section class="features">

    <h2>Website Features</h2>

    <div class="feature-container">

        <div class="feature-card">

            <div class="icon">
                👤
            </div>

            <h3>Register</h3>

            <p>
                Create a new account by providing
                your personal information.
            </p>

            <a href="register.php">
                Register Now
            </a>

        </div>


        <div class="feature-card">

            <div class="icon">
                🔐
            </div>

            <h3>Login</h3>

            <p>
                Access your account using your
                registered email and password.
            </p>

            <a href="login.php">
                Login Now
            </a>

        </div>


        <div class="feature-card">

            <div class="icon">
                🔑
            </div>

            <h3>Forgot Password</h3>

            <p>
                Recover your account if you
                forgot your password.
            </p>

            <a href="forgot-password.php">
                Recover Account
            </a>

        </div>

    </div>

</section>


<?php

include "includes/footer.php";

?>