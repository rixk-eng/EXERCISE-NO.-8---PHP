<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?? "OUTPUT#2" ?></title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">

    <div class="logo">
        PHP Output #2
    </div>

    <nav class="navbar">

        <a href="index.php"
           class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">
            Home
        </a>

        <a href="register.php"
           class="<?= $currentPage == 'register.php' ? 'active' : '' ?>">
            Register
        </a>

        <a href="login.php"
           class="<?= $currentPage == 'login.php' ? 'active' : '' ?>">
            Login
        </a>

    </nav>

</header>

<main class="main-content">