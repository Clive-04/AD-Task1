<?php include(__DIR__."/../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">
<img src="assets/img/catbanner.jpg" class="cat-page-banner" alt="Cat Banner">

<?php
    include(__DIR__."/data/cats.php");

    $slug =$_GET['cat'] ?? '';
    $cat = $cats[$slug] ?? null;

    if(!$cat): ?>
        <div style="text-align:center; margin-top: 50px;">
            <h2>Cat not found 🐾</h2>
            <a href="index.php" class="btn">Back to Cat List</a>
        </div>

    <?php else: ?>
        <div class="cat-card" style="max-width: 500px; margin: 30px auto;">
            <img src="assets/img/<?=$cat['img'] ?>" alt="<?=$cat['name'] ?>" class="cat-img">
            <h2><?= $cat['name'] ?></h2>
            <p><strong>Age:</strong> <?= $cat['age'] ?> years</p>
            <p><strong>Breed:</strong> <?= $cat['breed'] ?></p>
            <p><strong>Personality:</strong> <?= $cat['personality'] ?></p>
            <p><strong>Hobbies:</strong> <?= $cat['hobbies'] ?></p>
            <p><strong>Likes:</strong> <?= $cat['likes'] ?></p>
            <p><strong>Dislikes:</strong> <?= $cat['dislikes'] ?></p>
        </div>

        <div class="back-button-wrapper">
            <a href="index.php" class="btn">Back to Cat List</a>
        </div>
    <?php endif; ?>