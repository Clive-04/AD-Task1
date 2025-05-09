<?php include(__DIR__."/../../components/header.component.php"); ?>
<link rel="stylesheet" href="assets/css/catStyle.css">

<?php
    include(__DIR__."/data/cats.php");

    $cats = [
        ["name" => "Mittens", "age" => 2, "breed" => "Siamese", "img" => "siamese.jpg", "slug" => "Mittens"],
        ["name" => "Snow", "age" => 4, "breed" => "White", "img" => "white.jpg", "slug" => "Snow"],
        ["name" => "Milo", "age" => 1.3, "breed" => "Tabby", "img" => "tabby.jpg", "slug" => "Milo"],
        ["name" => "Luffy", "age" => 0.5, "breed" => "Ginger", "img" => "ginger.jpg", "slug" => "Luffy"],
        ["name" => "Zoro", "age" => 0.2, "breed" => "Calico", "img" => "calico.jpg", "slug" => "Zoro"],
    ];

    $catSlug = isset($_GET['cat']) ? strtolower($_GET['cat']) : '';

    $catData = null;
    foreach ($cats as $cat){
        if (strtolower($cat['slug']) == $catSlug){
            $catData = $cat;
            break;
        }
    }

    if ($catData == null){
        echo "<h2>Cat not found!</h2>";
        exit;
    }
?>

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