<?php
    $shelterName = "Happy Paws Shelter";
    $location = "Whiskerville";
?>
<?php include("components/header/comppnent.php"); ?>

<link rel="stylesheet" href="assets/css/global.css">
<div class="landing">
    <h1>Welcome to <?= $shelterName?>!</h1>
    <p>Your trusted place to find loving feline companions.</p>
    <p><strong>Locations:</strong><?= $location ?></p>
    <img src="assets/img/cat-banner.jpg" alt="Cat Banner" class="landing=img">
    <a href="pages/catList/index.php" class="btn">View Available Cats</a>
</div>
<script src="assets/js/global.js"></script>