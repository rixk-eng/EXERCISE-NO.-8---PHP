<?php
$firstName = "";
$lastName = "";
$age = "";
$gender = "";
$email = "";
$address = "";
$contactNumber = "";

$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = trim($_POST["firstName"] ?? "");
    $lastName = trim($_POST["lastName"] ?? "");
    $age = trim($_POST["age"] ?? "");
    $gender = trim($_POST["gender"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $contactNumber = trim($_POST["contactNumber"] ?? "");

    // First Name
    if (empty($firstName)) {
        $errors[] = "First Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $firstName)) {
        $errors[] = "First Name should contain letters only.";
    }

    // Last Name
    if (empty($lastName)) {
        $errors[] = "Last Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $lastName)) {
        $errors[] = "Last Name should contain letters only.";
    }

    // Age
    if (empty($age)) {
        $errors[] = "Age is required.";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT) || $age < 1 || $age > 120) {
        $errors[] = "Age must be between 1 and 120.";
    }

    // Gender
    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }

    // Email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    // Address
    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    // Contact Number
    if (empty($contactNumber)) {
        $errors[] = "Contact Number is required.";
    } elseif (!preg_match("/^09[0-9]{9}$/", $contactNumber)) {
        $errors[] = "Contact Number must be a valid 11-digit number starting with 09.";
    }

    if (empty($errors)) {
        $success = "Information submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Output #1</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Personal Information</h1>

    <p class="subtitle">
        PHP Output #1
    </p>

    <!-- Error Message -->
    <?php if (!empty($errors)): ?>

        <div class="error-box">

            <strong>Please correct the following:</strong>

            <ul>
                <?php foreach ($errors as $error): ?>

                    <li>
                        <?= htmlspecialchars($error) ?>
                    </li>

                <?php endforeach; ?>
            </ul>

        </div>

    <?php endif; ?>


    <!-- Success Message -->
    <?php if (!empty($success)): ?>

        <div class="success-box">
            <?= htmlspecialchars($success) ?>
        </div>

    <?php endif; ?>


    <!-- FORM -->

    <form method="POST" action="">

        <!-- First Name -->
        <div class="form-group">

            <label for="firstName">
                First Name <span>*</span>
            </label>

            <input
                type="text"
                id="firstName"
                name="firstName"
                placeholder="Enter your first name"
                value="<?= htmlspecialchars($firstName) ?>"
                required
            >

        </div>


        <!-- Last Name -->
        <div class="form-group">

            <label for="lastName">
                Last Name <span>*</span>
            </label>

            <input
                type="text"
                id="lastName"
                name="lastName"
                placeholder="Enter your last name"
                value="<?= htmlspecialchars($lastName) ?>"
                required
            >

        </div>


        <!-- Age -->
        <div class="form-group">

            <label for="age">
                Age <span>*</span>
            </label>

            <input
                type="number"
                id="age"
                name="age"
                placeholder="Enter your age"
                min="1"
                max="120"
                value="<?= htmlspecialchars($age) ?>"
                required
            >

        </div>


        <!-- Gender -->
        <div class="form-group">

            <label for="gender">
                Gender <span>*</span>
            </label>

            <select
                id="gender"
                name="gender"
                required
            >

                <option value="">
                    -- Select Gender --
                </option>

                <option
                    value="Male"
                    <?= $gender == "Male" ? "selected" : "" ?>
                >
                    Male
                </option>

                <option
                    value="Female"
                    <?= $gender == "Female" ? "selected" : "" ?>
                >
                    Female
                </option>

                <option
                    value="Other"
                    <?= $gender == "Other" ? "selected" : "" ?>
                >
                    Other
                </option>

            </select>

        </div>


        <!-- Email -->
        <div class="form-group">

            <label for="email">
                Email <span>*</span>
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="example@email.com"
                value="<?= htmlspecialchars($email) ?>"
                required
            >

        </div>


        <!-- Address -->
        <div class="form-group">

            <label for="address">
                Address <span>*</span>
            </label>

            <textarea
                id="address"
                name="address"
                placeholder="Enter your complete address"
                required
            ><?= htmlspecialchars($address) ?></textarea>

        </div>


        <!-- Contact Number -->
        <div class="form-group">

            <label for="contactNumber">
                Contact Number <span>*</span>
            </label>

            <input
                type="tel"
                id="contactNumber"
                name="contactNumber"
                placeholder="09XXXXXXXXX"
                pattern="09[0-9]{9}"
                maxlength="11"
                value="<?= htmlspecialchars($contactNumber) ?>"
                required
            >

        </div>


        <!-- Submit -->
        <button type="submit">
            Submit Information
        </button>

    </form>


    <!-- OUTPUT -->

    <?php if (!empty($success)): ?>

        <div class="result">

            <h2>Submitted Information</h2>

            <p>
                <strong>First Name:</strong>
                <?= htmlspecialchars($firstName) ?>
            </p>

            <p>
                <strong>Last Name:</strong>
                <?= htmlspecialchars($lastName) ?>
            </p>

            <p>
                <strong>Age:</strong>
                <?= htmlspecialchars($age) ?>
            </p>

            <p>
                <strong>Gender:</strong>
                <?= htmlspecialchars($gender) ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?= htmlspecialchars($email) ?>
            </p>

            <p>
                <strong>Address:</strong>
                <?= htmlspecialchars($address) ?>
            </p>

            <p>
                <strong>Contact Number:</strong>
                <?= htmlspecialchars($contactNumber) ?>
            </p>

        </div>

    <?php endif; ?>

</div>

<!-- JavaScript -->
<script src="script.js"></script>

</body>
</html>