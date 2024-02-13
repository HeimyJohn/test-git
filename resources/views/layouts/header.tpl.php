<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<header class="open-menu">
    <nav>
        <ul>
            <li><a href="/index.php?action=/">Home</a></li>
            <li><a href="/index.php?action=showAll">Catalogue</a></li>
            <li><a href="/index.php?action=cart">Cart</a></li>
            <li><a href="/index.php?action=fakeCart">FakeCart</a></li>
            <li><a href="/index.php?action=resetCartController">ResetCart</a></li>
        </ul>
    </nav>
    <button class="header__button"></button>
</header>