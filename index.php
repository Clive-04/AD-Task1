<?php
    $shelterName = "Happy Paws Shelter";
    $location = "Whiskerville";
?>
<?php include("components/header.component.php"); ?>

<link rel="stylesheet" href="assets/css/global.css">

<div class="landing">
    <img src="assets/img/cat banner.jpg" alt="Cat Banner" class="landing-img">

    <div class="landing-overlay">
        <h1>Welcome to <?= $shelterName?>!</h1>
        <p>Your trusted place to find loving fur babies.</p>
        <p><strong>Location:</strong> <?= $location ?></p>
        <a href="./page/catList/index.php" class="btn">View Available Cats</a>
    </div>
</div>

<section class="about">
    <h2>Why Adopt from Us?</h2>
    <p>We're passionate about rescuing, sheltering, and rehoming our feline friends. Every cat deserves a second chance at a happy home.</p>
</section>

<footer class="footer">
    <p>&copy; <?=date("Y") ?> <? $shelterName ?>. All Rights Reserved.</p>
    <p>Contact us at <a href="mailto:info@happypaws.com">info@happypaws.com</a></p>
</footer>

<script src="assets/js/global.js">