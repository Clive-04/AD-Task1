<?php
    $name = $_GET['name'] ?? 'Unknown';
    $age = $_GET['age'] ?? 'Unknown';
    $breed = $_GET['breed'] ?? 'Unknown';
    $img = $_GET['img'] ?? 'default.jpg';
?>

<?php include(__DIR__."/../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/profileStyle.css">

<div class="cat-profile">
    <h1><?= htmlspecialchars($name) ?></h1>
    <img src="../../assets/img/<?= htmlspecialchars($img) ?>" alt=<? htmlspecialchars($name) ?> class="profile-img">
    <p><strong>Age:</strong> <?=  htmlspecialchars($age) ?> years</p>
    <p><strong>Breed:</strong> <?= htmlspecialchars($breed) ?></p>
    <p><strong>Status:</strong> <?= $age < 1 ? 'Kitten 🐱' : 'Adult Cat 🐈' ?></p>
</div>

<div class="back-button-wrapper">
    <a href="../../index.php" class="btn">Back to Cat List</a>
</div>