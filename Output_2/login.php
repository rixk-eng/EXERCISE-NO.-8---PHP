<?php

$pageTitle = "Login - PHP Output #2";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if (!empty($email) && !empty($password)) {

        $message = "Login information submitted successfully.";

    }

}

include "includes/header.php";

?>

<div class="form-container">

    <div class="form-header">

        <h1>Welcome Back</h1>

        <p>
            Login to your account.
        </p>

    </div>


    <?php if (!empty($message)): ?>

        <div class="success-message">

            <?= htmlspecialchars($message) ?>

        </div>

    <?php endif; ?>


    <form method="POST" action="login.php">

        <div class="form-group">

            <label for="email">
                Email Address
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
            >

        </div>


        <div class="form-group">

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >

        </div>


        <div class="forgot">

            <a href="forgot-password.php">
                Forgot Password?
            </a>

        </div>


        <button type="submit" class="btn full">
            Login
        </button>

    </form>


    <p class="form-footer">

        Don't have an account?

        <a href="register.php">
            Register here
        </a>

    </p>

</div>


<?php

include "includes/footer.php";

?>