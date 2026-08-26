<?php

$pageTitle = "Forgot Password - PHP Output #2";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"] ?? "");

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message =
            "If this email is registered, password recovery instructions will be sent.";

    }

}

include "includes/header.php";

?>

<div class="form-container">

    <div class="form-header">

        <div class="large-icon">
            🔑
        </div>

        <h1>Forgot Password?</h1>

        <p>
            Enter your email address to recover your account.
        </p>

    </div>


    <?php if (!empty($message)): ?>

        <div class="success-message">

            <?= htmlspecialchars($message) ?>

        </div>

    <?php endif; ?>


    <form method="POST" action="forgot-password.php">

        <div class="form-group">

            <label for="email">
                Email Address
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your registered email"
                required
            >

        </div>


        <button type="submit" class="btn full">
            Reset Password
        </button>

    </form>


    <p class="form-footer">

        Remember your password?

        <a href="login.php">
            Back to Login
        </a>

    </p>

</div>


<?php

include "includes/footer.php";

?>