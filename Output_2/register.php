<?php

$pageTitle = "Register - PHP Output #2";

$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = trim($_POST["firstName"] ?? "");
    $lastName = trim($_POST["lastName"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirmPassword"] ?? "";

    if (
        !empty($firstName) &&
        !empty($lastName) &&
        !empty($email) &&
        !empty($password) &&
        !empty($confirmPassword)
    ) {

        if ($password === $confirmPassword) {

            $success = "Registration successful!";

        }

    }

}

include "includes/header.php";

?>

<div class="form-container">

    <div class="form-header">

        <h1>Create an Account</h1>

        <p>
            Register your account below.
        </p>

    </div>


    <?php if (!empty($success)): ?>

        <div class="success-message">
            <?= htmlspecialchars($success) ?>
        </div>

    <?php endif; ?>


    <form method="POST" action="register.php">

        <div class="form-group">

            <label for="firstName">
                First Name
            </label>

            <input
                type="text"
                id="firstName"
                name="firstName"
                placeholder="Enter your first name"
                required
            >

        </div>


        <div class="form-group">

            <label for="lastName">
                Last Name
            </label>

            <input
                type="text"
                id="lastName"
                name="lastName"
                placeholder="Enter your last name"
                required
            >

        </div>


        <div class="form-group">

            <label for="email">
                Email Address
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="example@email.com"
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
                minlength="8"
                required
            >

        </div>


        <div class="form-group">

            <label for="confirmPassword">
                Confirm Password
            </label>

            <input
                type="password"
                id="confirmPassword"
                name="confirmPassword"
                placeholder="Confirm your password"
                minlength="8"
                required
            >

        </div>


        <button type="submit" class="btn full">
            Register
        </button>

    </form>


    <p class="form-footer">

        Already have an account?

        <a href="login.php">
            Login here
        </a>

    </p>

</div>


<?php

include "includes/footer.php";

?>