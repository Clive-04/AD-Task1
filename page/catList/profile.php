<?php 
    include(__DIR__."/../../components/header.component.php");

    include(__DIR__."/data/cats.php");

    $catSlug = isset($_GET['cat']) ? strtolower($_GET['cat']) : '';

    if(!isset($cats[$catSlug])){
        echo "<h2>Cat not found!</h2>";
        exit;
    }

    $catData = $cats[$catSlug];
?>
    <link rel="stylesheet" href="assets/css/catStyle.css">
    <img src="assets/img/<?=$catData['img'] ?>" alt="<?=$catData['name'] ?>" class="cat-page-banner">
    <h1><?= $catData['name'] ?>'s Profile</h1>
    <p><strong>Age:</strong> <?= $cat['age'] ?> years</p>
    <p><strong>Breed:</strong> <?= $cat['breed'] ?></p>
    <p><strong>Personality:</strong> <?= $cat['personality'] ?></p>
    <p><strong>Hobbies:</strong> <?= $cat['hobbies'] ?></p>
    <p><strong>Likes:</strong> <?= $cat['likes'] ?></p>
    <p><strong>Dislikes:</strong> <?= $cat['dislikes'] ?></p>

    <div class="back-button-wrapper">
        <a href="index.php" class="btn">Back to Cat List</a>
    </div>

    <script src="assets/js/catScript.js"></script>